<?php

namespace App\Repository;
use App\Repository\Interfaces\Company_brokersRepositoryInterface;
use App\Models\Company_brokers;

class Company_brokersRepository implements Company_brokersRepositoryInterface
{
	private $model;
	public function __construct(Company_brokers $Company_brokers)
	{
		$this->model = $Company_brokers;
	}

	public function index(array $column = ['*'],array $condition = [],array $order = []){
		$query = $this->model
					->select($column)
					->join('company_informations',function($join){
						$join->on('company_id','=','company_informations.id');
					});
		if($condition != []){
			$array_key = array_keys($condition);
			$array_value = array_values($condition);
			for($i = 0 ; $i < count($condition); $i++){
				$query = $query->where($array_key[$i],$array_value[$i]);
			}
		}
		if($order != []){
			$array_key = array_keys($order);
			$array_value = array_values($order);
			for($i = 0 ; $i < count($order); $i++){
				$query = $query->orderBy($array_key[$i],$array_value[$i]);
			}
		}
		$result = $query->get()->toArray();
		return $result;
	}
}