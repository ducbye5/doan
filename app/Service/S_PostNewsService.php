<?php

namespace App\Service;

use DB;
use App\Repository\Interfaces\New_infosRepositoryInterface;
use App\Repository\Interfaces\New_detailsRepositoryInterface;
use App\Repository\Interfaces\CustomersRepositoryInterface;
use App\Repository\Interfaces\Post_news_historiesRepositoryInterface;
use App\Service\FileService; 

class S_PostNewsService
{
	private $new_infosRepository;
	private $new_detailsRepository;
	private $customersRepository;
	private $post_news_historiesRepository;
	private $fileService;

	public function __construct(
		New_infosRepositoryInterface $New_infosRepository,
		New_detailsRepositoryInterface $New_detailsRepository,
		CustomersRepositoryInterface $CustomersRepository,
		Post_news_historiesRepositoryInterface $Post_news_historiesRepository,
		FileService $FileService
	){
		$this->new_infosRepository = $New_infosRepository;
		$this->new_detailsRepository = $New_detailsRepository;
		$this->customersRepository = $CustomersRepository;
		$this->post_news_historiesRepository = $Post_news_historiesRepository;
		$this->fileService = $FileService;
	}

	public function index(){
		$view = 'Site.PostNews';
		return $view;
	}

	public function regist($data_input){
		$message_success = __('PostNews.regist_success');
		$message_fail = __('PostNews.regist_fail');
		DB::beginTransaction();
		try{
			$result = $this->pay_for_news($data_input);
			if($result == 'Not Enough'){
				$result = [
					'status' => false,
					'message' => __('PostNews.not_enough_coint')
				];
				return $result;
			}else{
				$status = $result['status'];
				$data_input = $result['data_input'];
			}
			if($status){
				$status = $this->insert_data($data_input);
			}
			if($status){
				$message = $message_success;
				DB::commit();
			}else{
				$message = $message_fail;
				DB::rollback();
			}
		}catch(\Exception $e){
			$status = false;
			$message = $message_fail;
			\Log::debug($e->getMessage());
			DB::rollback();
		}
		$result = [
			'status' => $status,
			'message' => $message
		];
		return $result;
	}

	public function pay_for_news($data_input){
		$data_input = $this->get_fees_information($data_input);
		$status = false;
		$customer_id = !empty(\Session::get('customer')->id)?\Session::get('customer')->id:null;
		if(!empty($customer_id)){
			$total_coint_of_customer = $this->customersRepository->findByID($customer_id,['coint'])->coint;
			if($total_coint_of_customer >= $data_input['feesInformation']['fees_for_news']){
				$total_coint_of_customer_after_pay = $total_coint_of_customer - $data_input['feesInformation']['fees_for_news'];
				$array_update_customers_table = [
					'coint' => $total_coint_of_customer_after_pay,
					'updated_at' => now()
				];
				$this->customersRepository->update($customer_id,$array_update_customers_table);
				$status = true;
			}else{
				$status = 'Not Enough';
				return $status;
			}	
		}
		$result = [
			'data_input' => $data_input,
			'status' => $status
		];
		return $result;
	}

	public function get_fees_information($data_input){
		$int_timestart = strtotime(date($data_input['calendar']['timestart']));
		$int_timefinish = strtotime(date($data_input['calendar']['timefinish']));
		$total_seconds_of_day = 86400;
		$total_number_of_post_news_days = ($int_timefinish - $int_timestart) / $total_seconds_of_day;
		if($data_input['calendar']['typeofcost'] == 'Goodwill'){
			$unit_price = 4;
		}elseif($data_input['calendar']['typeofcost'] == 'Vip'){
			$unit_price = 7;
		}elseif($data_input['calendar']['typeofcost'] == 'Special'){
			$unit_price = 10;
		}else{
			$unit_price = 2;
		}
		if($data_input['basicInformation']['type'] == 'Rental' || $data_input['basicInformation']['type'] == 'Sell'){
			$percent_of_unit_price = 1;
		}else{
			$percent_of_unit_price = 0.5;
		}
		$VAT = 0.1;
		$fees_for_news_before_tax = $total_number_of_post_news_days * $unit_price * $percent_of_unit_price;
		$fees_for_news = $fees_for_news_before_tax + round($fees_for_news_before_tax * $VAT);
		$data_input['feesInformation'] = [
			'total_number_of_post_news_days' => $total_number_of_post_news_days,
			'unit_price' => $unit_price,
			'percent_of_unit_price' => $percent_of_unit_price,
			'fees_for_news' => $fees_for_news
		];
		return $data_input;
	}

	public function insert_data($data_input){
		$status = false;
		$pathStore = 'upload/image/news/';
		$customer_id = !empty(\Session::get('customer')->id)?\Session::get('customer')->id:null;
		try{
			$status = true;
			$array_data = $this->set_data($data_input);
			$id_new_details = $this->new_detailsRepository->createAndGetID($array_data['news_details']);
			$data_picture = isset($array_data['news_infos']['news_picture'])?$array_data['news_infos']['news_picture']:'';
			if(!empty($id_new_details)){
				$status = true;
				$array_data['news_infos']['news_detail_id'] = $id_new_details;
				$id_new_infos = $this->new_infosRepository->createAndGetID($array_data['news_infos']);
				if(!empty($id_new_infos) || ($customer_id != null)){
					$data_to_insert = [
						'customer_id' => $customer_id,
						'news_infos_id' => $id_new_infos,
						'post_news_fees' => $data_input['feesInformation']['fees_for_news'],
						'created_at' => now(),
						'updated_at' => now(),
					];
					$this->post_news_historiesRepository->create($data_to_insert);
				}else{
					$this->delete_Image($data_picture,$pathStore);
					$status = false;
				}
			}else{
				$this->delete_Image($data_picture,$pathStore);
				$status = false;
			}
		}catch(\Exception $e){
			\Log::debug($e->getMessage());
			\Log::debug('__INSERT_DATA_TO_NEWS_TABLE_IS_FAIL__');
			$status = false;
		}
		return $status;
	}

	public function set_data($data_input){
		$time['created_at'] = now();
		$time['updated_at'] = now();
		$data_news_details = $this->set_data_of_news_detail_table($data_input);
		$data_news_infos = $this->set_data_of_news_info_table($data_input);
		$pathStore = 'upload/image/news/';
		$list_name_pictures = $this->store_Image($data_input['pictures'],$pathStore);
		$data_news_infos['news_picture'] = $list_name_pictures;
		$data_news_details = array_merge($data_news_details,$time);
		$data_news_infos = array_merge($data_news_infos,$time);
		$data_result = [
			'news_details' => $data_news_details,
			'news_infos' => $data_news_infos
		];
		return $data_result;
	}

	private function set_data_of_news_detail_table($data_input){
		$data_news_detail = [
			'news_basic_info_country' => $data_input['basicInformation']['country'],
			'news_basic_info_city' => $data_input['basicInformation']['city'],
			'news_basic_info_district' => $data_input['basicInformation']['district'],
			'news_basic_info_ward' => $data_input['basicInformation']['ward'],
			'news_basic_info_street' => $data_input['basicInformation']['street'],
			'news_basic_info_project' => $data_input['basicInformation']['project'],
			'news_description_info' => $data_input['descriptionInformation']['description'],
			'news_other_info_facade' => $data_input['otherInformation']['facade'],
			'news_other_info_directionhouse' => $data_input['otherInformation']['directionhouse'],
			'news_other_info_directionbalcony' => $data_input['otherInformation']['directionbalcony'],
			'news_other_info_numberfloors' => $data_input['otherInformation']['numberfloors'],
			'news_contact_info_mobilephone' => $data_input['contactInformation']['mobilephone'],
			'news_contact_info_email' => $data_input['contactInformation']['email'],
			'news_contact_info_name' => $data_input['contactInformation']['name'],
			'news_contact_info_address' => $data_input['contactInformation']['address'],
		];
		return $data_news_detail;
	}

	private function set_data_of_news_info_table($data_input){
		$data_news_info = [
			'news_picture' => '',
			'news_basic_info_title' => $data_input['basicInformation']['title'],
			'news_basic_info_type' => $data_input['basicInformation']['type'],
			'news_basic_info_typeofproperties' => $data_input['basicInformation']['typeofproperties'],
			'news_basic_info_acreage' => $data_input['basicInformation']['acreage'],
			'news_basic_info_price' => $data_input['basicInformation']['price'],
			'news_basic_info_unit' => $data_input['basicInformation']['unit'],
			'news_basic_info_address' => $data_input['basicInformation']['address'],
			'news_other_info_numberbedrooms' => $data_input['otherInformation']['numberbedrooms'],
			'news_other_info_numbertoilets' => $data_input['otherInformation']['numbertoilets'],
			'news_calendar_typeofcost' => $data_input['calendar']['typeofcost'],
			'news_calendar_timestart' => $data_input['calendar']['timestart'],
			'news_calendar_timefinish' => $data_input['calendar']['timefinish'],
			'news_detail_id' => null,
		];
		return $data_news_info;
	}

	public function store_Image($list_image,$pathStore){
		for($i = 0 ; $i < count($list_image); $i++){
			$array_name_picture[$i] = time(0).$this->fileService->getName($list_image[$i]);
			$this->fileService->uploadFile($list_image[$i],$pathStore,$array_name_picture[$i]);
		}
		$list_name_pictures = implode(';',$array_name_picture);
		return $list_name_pictures;
	}

	public function delete_Image($list_name_pictures,$pathStore){
		if(!empty($list_name_pictures)){
			$array_name_picture = explode(';',$list_name_pictures);
			for($i = 0 ; $i < count($array_name_picture); $i++){
				$status = $this->fileService->deleteFile($array_name_picture[$i],$pathStore);
			}
		}else{
			$status = false;
		}
		return $status;
	}
}