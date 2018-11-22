<?php

namespace App\Service;

class S_IndexService
{

	public function __construct(
		
	){
		
	}
	public function index()
	{
        $view = 'index';
        return $view;
	}

	public function indexMap()
	{
        $view = 'indexMap';
        return $view;
	}
}