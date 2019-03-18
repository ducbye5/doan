<?php

namespace App\Repository\Interfaces;

interface Company_brokersRepositoryInterface
{
	public function index(array $column,array $condition,array $order);
}