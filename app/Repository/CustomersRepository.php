<?php

namespace App\Repository;
use App\Models\Customers;
use App\Repository\Interfaces\CustomersRepositoryInterface;

class CustomersRepository implements CustomersRepositoryInterface
{
	private $model;
	public function __construct(Customers $Customers)
	{
		$this->model = $Customers;
	}

	public function create(array $data = [])
	{
		$result = false;
		if($data != []){
			$result = $this->model->insert($data);
		}
		return $result;
	}

	public function findByEmail(string $email = null,array $column = ['*'])
	{
		$result = $this->model
		               ->select($column)
		               ->where('email',$email)
		               ->first();
		return $result;
	}

	public function findByID(int $id = null,array $column = ['*'])
	{
		$result = $this->model
		               ->select($column)
		               ->where('id',$id)
		               ->first();
		return $result;
	}

	public function update(int $id = null,array $array_data = [])
	{
		$result = $this->model
						->where('id',$id)
						->update($array_data);
	}
}