<?php

namespace App\Service;
use App\Repository\Interfaces\ProfilesRepositoryInterface;

class A_HomeService
{
	private $profilesReporitory;
	public function __construct(
		ProfilesRepositoryInterface $ProfilesRepository
	){
		$this->profilesReporitory = $ProfilesRepository;
	}
	public function index()
	{
        $view = 'home';
        return $view;
	}

	public function logout()
	{
		\Auth::logout();
        $url = 'login';
        return $url;
	}
}