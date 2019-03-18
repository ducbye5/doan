<?php

namespace App\Service;

use App\Repository\Interfaces\New_infosRepositoryInterface;
use App\Repository\Interfaces\Company_informationsRepositoryInterface;
use App\Repository\Interfaces\Company_brokersRepositoryInterface;
use App\Service\S_PropertiesService;
use App\Service\HelpsService;

class S_IndexService
{
	private $new_infosRepository;
	private $company_informationsRepository;
	private $company_brokersRepository;
	private $s_PropertiesService;
    private $helpsService;

	public function __construct(
		New_infosRepositoryInterface $New_infosRepository,
		Company_informationsRepositoryInterface $Company_informationsRepository,
		Company_brokersRepositoryInterface $Company_brokersRepository,
		S_PropertiesService $S_PropertiesService,
        HelpsService $HelpsService
	){
		$this->new_infosRepository = $New_infosRepository;
		$this->company_informationsRepository = $Company_informationsRepository;
		$this->company_brokersRepository = $Company_brokersRepository;
		$this->s_PropertiesService = $S_PropertiesService;
        $this->helpsService = $HelpsService;
	}
	public function index(array $data = [])
	{
		// $this->fake_data();
		if($data == []){
	    	$data_news = $this->new_infosRepository->get_all_record(15);
            $data_input = null;
    	}else{
    		$data_news = $data['data_property'];
            $data_input = $data['data_input'];
    	}
        $view = 'index';
        $data_top_slide = $this->get_list_data_top_slide();
        $data_middle_slide = $this->get_list_data_middle_slide();
        if(!empty($data_input)){
            $data_input_search = [
                'country' => $data_input['country'],
                'city' => $data_input['city'],
                'district' => $data_input['district'],
                'project' => $data_input['project'],
                'area' => $data_input['area'],
                'bedrooms' => $data_input['bedrooms'],
                'bathrooms' => $data_input['bathrooms'],
                'minprice' => $data_input['minprice'],
                'maxprice' => $data_input['maxprice'],
            ];
            $data_input_fillter = [
                'type_of_property' => $data_input['typeofproperties'],
                'sortby' => $data_input['sortby'],
                'orderby' => $data_input['orderby'],
            ];
        }else{
            $data_input_search = null;
            $data_input_fillter = null;
        }

        $listDataToSearch = $this->helpsService->listDataToSearch();
        
        $data = [
        	'data_top_slide' => $data_top_slide,
        	'data_middle_slide' => $data_middle_slide,
        	'data_news' => $data_news,
            'data_input_search' => $data_input_search,
            'data_input_fillter' => $data_input_fillter,
            'list_data_to_search' => $listDataToSearch,
        ];
        $result = [
        	'view' => $view,
        	'data' => $data
        ];
        return $result;
	}

	private function get_list_data_top_slide(){
		$number_record = 3;
        $typeofcost = 'Special';
		$result = $this->new_infosRepository->get_top_latest_record($typeofcost,$number_record);
		return $result;
	}

	private function get_list_data_middle_slide(){
		$number_record = 5;
        $typeofcost = 'Vip';
        $result = $this->new_infosRepository->get_top_latest_record($typeofcost,$number_record);
        if(count($result) != 5){
			$typeofcost = 'Goodwill';
			$result = $this->new_infosRepository->get_top_latest_record($typeofcost,$number_record);
		}
		return $result;
	} 


	public function indexMap()
	{
        $view = 'indexMap';
        return $view;
	}

	public function searchProperties($data_input){
    	$data_search_fillter = $this->s_PropertiesService->filter_data($data_input);
    	$data_property = $this->new_infosRepository->search_property(15,$data_search_fillter);
    	$data = [
    		'data_property' => $data_property,
            'data_input' => $data_input
    	];
    	$result = $this->index($data);
    	return $result;
    }

    public function getSomeInformationOfCompany(){
    	$column_main_company = ['office_facebook','office_twitter','office_linkedin','office_skype','office_slack'];
    	$condition_main_company = ['office_priority' => 1];
    	$data_main_company = $this->company_informationsRepository->index($column_main_company,$condition_main_company);
    	$column_company_information = ['office_branch','office_address','office_telephone','office_fax','office_mail'];
    	$data_company_information = $this->company_informationsRepository->index($column_company_information);
    	$column_top_broker = ['company_brokers.id','broker_name','broker_avatar','office_address','broker_description'];
    	$condition_order_top_broker = ['broker_level' => 'desc'];
    	$data_top_broker = $this->company_brokersRepository->index($column_top_broker,[],$condition_order_top_broker);
    	$data = [
    		'data_main' => $data_main_company[0],
    		'data_info' => $data_company_information,
    		'data_broker' => $data_top_broker,
    	];
    	return $data;
    }

    private function fake_data(){
    	$data_company_brokers = [
    		0 => [
    			'company_id' => 1,
    			'broker_level' => 4
    		],
    		1 => [
    			'company_id' => 2,
    			'broker_level' => 3
    		],
    		2 => [
    			'company_id' => 3,
    			'broker_level' => 2
    		],
    	];
    	$data_company_informations = [
    		0 => [
    			'office_branch' => 'Viet Nam',
    			'office_priority' => 1
    		],
    		1 => [
    			'office_branch' => 'England',
    			'office_priority' => 0
    		],
    		2 => [
    			'office_branch' => 'United States Of America',
    			'office_priority' => 0
    		],
    	];
    	//factory(\App\Models\Post_news_histories::class,5)->create();
    	for($i = 0; $i < 3;$i++){
    		factory(\App\Models\Company_informations::class,1)->create($data_company_informations[$i]);
    		factory(\App\Models\Company_brokers::class,1)->create($data_company_brokers[$i]);
    	}
    }
}