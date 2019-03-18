<?php

namespace App\Repository\Interfaces;

interface New_infosRepositoryInterface
{
	public function create(array $data);
	public function createAndGetID(array $input);
	public function get_top_latest_record($type,$number);
	public function get_all_record($record_number,$array_order_by,$type);
	public function search_property($record_number,$data);
	public function getDetailOfProperty($id);
}