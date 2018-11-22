<?php

namespace App\Repository\Interfaces;

interface ProfilesRepositoryInterface
{
	public function findByID(int $id = Null,array $column = ['*']);
	public function createAndGetID(array $input = []);
	public function updateByID(int $id = Null,array $input = ['*']);
	public function deleteByID(int $id);
}