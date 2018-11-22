<?php

namespace App\Repository;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
	private $model;
	public function __construct(User $user)
	{
		$this->model = $user;
	}

	public function findByID(int $id = Null,array $column = ['*'])
	{
		$result = $this->model->select($column)->where('id',$id)->get()->toArray();
		return $result;
	}

	public function findByEmail(string $email = '',array $column = ['*'])
	{
		$result = $this->model->select($column)->where('email',$email)->get()->toArray();
		return $result;
	}

	public function getData(array $column = ['*'])
	{
		$result = $this->model->select($column)->get();
		return $result;
	}

	public function getDataForList(array $column = ['*'])
	{
		$result = $this->model
					->join('profiles',function($join){
						$join->on('profiles.id','users.profile_id');
					})
					->select($column)
					->where('role','!=','administrator')
					->get();
		return $result;
	}

	public function getDataWithOneCondition(array $column = ['*'],string $condition = '')
	{
		$result = $this->model
					->select($column)
					->where($condition)
					->get();
		return $result;
	}

	public function registAccount(array $input = [])
	{
		$result = $this->model->insert($input);
		return $result;
	}

	public function updateActiveUser(string $active = 'enable',int $id)
	{
		$result = $this->model->where('id',$id)->update(['active'=>$active]);
		return $result;
	}

	public function updateRoleByEmail(string $role = 'visiter', string $email = '')
	{
		$result = $this->model->where('email',$email)->update(['role'=>$role]);
		return $result;
	}

	public function deleteByID(int $id)
	{
		$result = $this->model->where('id',$id)->delete();
		return $result;
	}
}