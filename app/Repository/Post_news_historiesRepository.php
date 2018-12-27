<?php

namespace App\Repository;

use App\Models\Post_news_histories;
use App\Repository\Interfaces\Post_news_historiesRepositoryInterface;

class Post_news_historiesRepository implements Post_news_historiesRepositoryInterface
{
	private $model;
	public function __construct(
		Post_news_histories $Post_news_histories
	){
		$this->model = $Post_news_histories;
	}

	public function create(array $data = [])
	{
		$result = false;
		if($data != []){
			$result = $this->model->insert($data);
		}
		return $result;
	}
	
}