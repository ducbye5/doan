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
		if($data != []){
			$result = $this->model->insert($data);
		}else{

		}
		return $result;
	}

	public function findByEmail(string $email = Null,array $column = ['*'])
	{
		$result = $this->model
		               ->select($column)
		               ->where('email',$email)
		               ->first();
		return $result;
	}

	public function findByID(int $id = Null,array $column = ['*'])
	{
		$result = $this->model
		               ->select($column)
		               ->where('id',$id)
		               ->first();
		return $result;
	}
}