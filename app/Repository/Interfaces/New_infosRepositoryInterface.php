<?php

namespace App\Repository\Interfaces;

interface New_infosRepositoryInterface
{
	public function create(array $data);
	public function createAndGetID(array $input);
}