<?php

namespace App\Repository;
use App\Repository\Interfaces\Company_informationsRepositoryInterface;
use App\Models\Company_informations;

class Company_informationsRepository implements Company_informationsRepositoryInterface
{
	private $model;
	public function __construct(Company_informations $Company_informations)
	{
		$this->model = $Company_informations;
	}

	public function index(array $column = ['*'],array $condition = []){
		$query = $this->model->select($column);
		if($condition != []){
			$array_key = array_keys($condition);
			$array_value = array_values($condition);
			for($i = 0 ; $i < count($condition); $i++){
				$query = $query->where($array_key[$i],$array_value[$i]);
			}
		}
		$result = $query->get()->toArray();
		return $result;
	}
}