<?php

namespace App\Repository\Interfaces;

interface Social_linksRepositoryInterface
{
	public function findByID(int $id = Null,array $column = ['*']);
	public function createAndGetID(array $input = []);
	public function updateByID(int $id = Null,array $column = []);
	public function deleteByID(int $id);
}