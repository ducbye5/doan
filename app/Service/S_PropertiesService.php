<?php

namespace App\Service;
use App\Repository\Interfaces\New_infosRepositoryInterface;


class S_PropertiesService
{

	private $new_infosRepository;

	public function __construct(
		New_infosRepositoryInterface $New_infosRepository
	){
		$this->new_infosRepository = $New_infosRepository;
    }

    public function index($type,$data_input = []){
    	if($data_input == []){
    		$data_order_by = [
	    		'prioritize_01' => 'desc'
	    	];
	    	$data_property = $this->new_infosRepository->get_all_record(15,$data_order_by,$type);
    	}else{
    		$data_property = $data_input['data_property'];
    	}

    	$data_top_view_property = $this->get_list_top_view_property();
    	if($type == 'sell' || $type == 'rental'){
    		$view = 'Site.SellAndRental';
    	}elseif($type == 'purchase' || $type == 'rent'){
    		$view = 'Site.PurchaseAndRent';
    	}
    	$data = [
    		'top_view_property' => $data_top_view_property,
    		'data_property' => $data_property
    	];
    	$result = [
    		'view' => $view,
    		'type' => $type,
    		'data' => $data,
    	];
    	return $result;
    }

    public function searchProperties($data_input){
    	$data_input = $this->filter_data($data_input);
    	$data_property = $this->new_infosRepository->search_property(15,$data_input);
    	$data = [
    		'data_property' => $data_property
    	];
    	$result = $this->index($data_input['type'],$data);
    	return $result;
    }

    private function get_list_top_view_property(){
    	$result = $this->new_infosRepository->get_top_latest_record('Goodwill',8);
    	return $result;
    }

    public function filter_data($data_input){
    	$data['type'] = !empty($data_input['type'])?$data_input['type']:null;
    	$arr_address = array_filter([
    		$data_input['project'],
    		$data_input['district'],
    		$data_input['city'],
    		$data_input['country'],
    	]);
    	$data['address'] = implode(' - ', $arr_address);
    	$data['area'] = !empty($data_input['area'])?(int)$data_input['area']:null;
    	if($data_input['bedrooms'] == '5plus'){
    		$data['bedrooms'] = '5plus';
    	}else{
    		$data['bedrooms'] = !empty($data_input['bedrooms'])?(int)$data_input['bedrooms']:null;
    	}
    	if($data_input['bathrooms'] == '5plus'){
    		$data['bathrooms'] = '5plus';
    	}else{
    		$data['bathrooms'] = !empty($data_input['bathrooms'])?(int)$data_input['bathrooms']:null;
    	}
    	$data['type_of_property'] = $data_input['typeofproperties']??null;
    	$data['minprice'] = !empty($data_input['minprice'])?(int)$data_input['minprice']:null;
    	$data['maxprice'] = !empty($data_input['maxprice'])?(int)$data_input['maxprice']:null;
    	if($data_input['sortby'] == 'name'){
    		$data['sortby'] = 'news_basic_info_title';
    	}elseif($data_input['sortby'] == 'area'){
    		$data['sortby'] = 'news_basic_info_acreage';
    	}elseif($data_input['sortby'] == 'date'){
    		$data['sortby'] = 'id';
    	}
    	$data['orderby'] = $data_input['orderby'];
    	return $data;
    }

    public function detail($id){
    	$data_property = $this->new_infosRepository->getDetailOfProperty($id);
    	$city = $data_property['news_basic_info_city'];
    	$id = $data_property['id'];
    	$condition = [
    		'news_basic_info_city' => $city,
    		'prioritize_01' => 4
    	];
    	$listPropertyInTheSameCity = $this->new_infosRepository->getListByCondition($condition,$id);
    	$view = 'Site.PropertiesDetail';
    	$result = [
    		'view' => $view,
    		'property_detail' => $data_property,
    		'property_in_the_same_city' => $listPropertyInTheSameCity
    	];
    	return $result;
    }
}