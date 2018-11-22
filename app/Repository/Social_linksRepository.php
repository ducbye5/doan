<?php

namespace App\Repository;
use App\Repository\Interfaces\Social_linksRepositoryInterface;
use App\Models\Social_links;

class Social_linksRepository implements Social_linksRepositoryInterface
{
	private $model;
	public function __construct(Social_links $Social_links)
	{
		$this->model = $Social_links;
	}
	public function findByID(int $id = Null,array $column = ['*'])
	{
		$result = $this->model->select($column)->where('id',$id)->get()->toArray();
		return $result;
	}
	public function createAndGetID(array $input = [])
	{
		$result = $this->model->insertGetId($input);
		return $result;
	}
	public function updateByID(int $id = Null,array $column = [])
	{
		$result = $this->model->where('id',$id)->update($column);
		return $result;
	}

	public function deleteByID(int $id)
	{
		$result = $this->model->where('id',$id)->delete();
		return $result;
	}
}