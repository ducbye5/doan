<?php

namespace App\Repository;

use App\Models\News_infos;
use App\Repository\Interfaces\New_infosRepositoryInterface;
use DB;

class New_infosRepository implements New_infosRepositoryInterface
{
	private $model;
	public function __construct(
		News_infos $News_infos
	){
		$this->model = $News_infos;
	}

	public function create(array $data = [])
	{
		$result = false;
		if($data != []){
			$result = $this->model->insert($data);
		}
		return $result;
	}

	public function createAndGetID(array $input = [])
	{
		$result = false;
		if($input != []){
			$result = $this->model->insertGetId($input);
		}
		return $result;
	}

	public function get_top_latest_record($type = '',$number = 0){
		$query = $this->model
					->select('*')
					->where('news_calendar_typeofcost',$type)
					->orderBy('id','desc');
		if($type = 'Normal'){
			$result = $query->get();
		}else{
			$result = $query->limit($number)
				->get();
		}
		return $result;
	}

	public function get_all_record($record_number = 0,$array_order_by = ['id' => 'desc'],$type = null){
		$array_key = array_keys($array_order_by);
		$array_value = array_values($array_order_by);
		$query = $this->model
					->select('*');
		if(!empty($type)){
			$query = $query->where('news_basic_info_type',$type);
		}
		for($i = 0 ;$i < count($array_order_by);$i++){
			$query->orderBy($array_key[$i],$array_value[$i]);
		}
		if($record_number == 0){
			$result = $query->get();
		}else{
			$result = $query->paginate($record_number);
		}
		return $result;
	}

	public function search_property($record_number = 0,$data = []){
		$query = $this->model
					->select('*');
		if($data == []){
			$query = $query->orderBy('name','desc');
		}else{
			if(!empty($data['type'])){

				$query = $query->orderBy('prioritize_01','desc')
							->where('news_basic_info_type',$data['type']);
			}
			if(!empty($data['type_of_property'])){
				$query = $query->where('news_basic_info_typeofproperties',$data['type_of_property']);
			}
			if(!empty($data['address'])){
				$query = $query->where('news_basic_info_address','like','%'.$data['address'].'%');
			}
			if(!empty($data['area'])){
				$query = $query->where('news_basic_info_acreage','>=',$data['area']);
			}
			if(!empty($data['bedrooms'])){
				if($data['bedrooms'] == '5plus'){
					$query = $query->where('news_other_info_numberbedrooms','>',5);
				}else{
					$query = $query->where('news_other_info_numberbedrooms',$data['bedrooms']);
				}
			}
			if(!empty($data['bathrooms'])){
				if($data['bathrooms'] == '5plus'){
					$query = $query->where('news_other_info_numbertoilets', '>', 5);
				}else{
					$query = $query->where('news_other_info_numbertoilets',$data['bathrooms']);
				}
			}
			if(!empty($data['minprice'])){
				$query = $query->where('news_basic_info_total_price','>=',$data['minprice']);
			}
			if(!empty($data['maxprice'])){
					$query = $query->where('news_basic_info_total_price','<=',$data['maxprice']);
			}
			if(!empty($data['sortby']) && !empty($data['orderBy'])){
				$query = $query->orderBy($data['sortby'],$data['orderBy']);
			}
		}
		if($record_number == 0){
			$result = $query->get();
		}else{
			$result = $query->paginate($record_number);
		}
		return $result;
	}

	public function getDetailOfProperty($id) {
		$result = $this->model->select('*')
							->join('news_details',function($join){
								$join->on('news_detail_id','=','news_details.id');
							})
							->where('news_infos.id',$id)
							->first()
							->toArray();
		return $result;

	}

	public function getListByCondition(array $condition,$id = null){
		$array_key = array_keys($condition);
		$array_value = array_values($condition);
		$query = $this->model
					->select(
						'news_infos.id',
						'news_picture',
						'news_basic_info_title',
						'news_basic_info_type',
						'news_basic_info_total_price',
						'news_basic_info_acreage',
						'news_basic_info_address',
						'news_other_info_numberbedrooms',
						'news_other_info_numbertoilets'
					)
					->join('news_details',function($join){
						$join->on('news_detail_id','=','news_details.id');
					});
		for($i = 0 ;$i < count($condition);$i++){
			$query->where($array_key[$i],$array_value[$i]);
		}
		if(!empty($id)){
			$query->where('news_infos.id','!=',$id);
		}
		$result = $query->limit(10)->get();
		return $result;
	}
}