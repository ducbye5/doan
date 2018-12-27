<?php

namespace App\Repository;

use App\Models\News_details;
use App\Repository\Interfaces\New_detailsRepositoryInterface;

class New_detailsRepository implements New_detailsRepositoryInterface
{
	private $model;
	public function __construct(
		News_details $News_details
	){
		$this->model = $News_details;
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