<?php

namespace App\Repository\Interfaces;

interface CustomersRepositoryInterface
{
	public function create(array $data = []);
	public function findByEmail(string $email = Null,array $column = ['*']);
	public function findByID(int $id = Null,array $column = ['*']);
}