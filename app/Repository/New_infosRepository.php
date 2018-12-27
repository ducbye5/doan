<?php

namespace App\Repository;

use App\Models\News_infos;
use App\Repository\Interfaces\New_infosRepositoryInterface;

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
}