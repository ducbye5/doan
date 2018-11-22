<?php

namespace App\Repository;
use App\Models\Profiles;
use App\Repository\Interfaces\ProfilesRepositoryInterface;

class ProfilesRepository implements ProfilesRepositoryInterface
{

	private $model;
	public function __construct(Profiles $Profiles)
	{
		$this->model = $Profiles;
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

	public function updateByID(int $id = Null,array $input = ['*'])
	{
		$result = $this->model->where('id',$id)->update($input);
		return $result;
	}

	public function deleteByID(int $id)
	{
		$result = $this->model->where('id',$id)->delete();
		return $result;
	}
}