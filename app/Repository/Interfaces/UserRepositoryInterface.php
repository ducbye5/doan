<?php

namespace App\Repository\Interfaces;

interface UserRepositoryInterface
{
	public function findByID(int $id = Null,array $column = ['*']);
	public function findByEmail(string $email = '',array $column = ['*']);
	public function getData(array $column = ['*']);
	public function registAccount(array $input = []);
	public function getDataForList(array $column = ['*']);
	public function updateActiveUser(string $active = 'enable',int $id);
	public function deleteByID(int $id);
	public function getDataWithOneCondition(array $column = ['*'],string $condition = '');
	public function updateRoleByEmail(string $role = 'visiter', string $email = '');
}