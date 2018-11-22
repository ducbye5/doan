<?php

namespace App\Service;
use App\Repository\Interfaces\CustomersRepositoryInterface;
use App\Repository\Interfaces\ProfilesRepositoryInterface;
use App\Repository\Interfaces\Social_linksRepositoryInterface;
use DB;
class S_CustomerService
{
	private $customersRepository;
	private $profilesRepository;
	private $social_linksRepository;
	public function __construct(
		CustomersRepositoryInterface $CustomersRepository,
		ProfilesRepositoryInterface $ProfilesRepository,
		Social_linksRepositoryInterface $Social_linksRepository
	){
    	$this->customersRepository = $CustomersRepository;
    	$this->profilesRepository = $ProfilesRepository;
    	$this->social_linksRepository = $Social_linksRepository;
	}

	public function login($input)
	{
		$status = false;
		$record_customer = $this->customersRepository->findByEmail($input['email']);
		if(count($record_customer) != 0 && \Hash::check($input['password'],$record_customer->password)){
			\Session::put(['customer' => $record_customer]);
			\Session::flash('message',__('Message.login_success'));
			$status = true;
		}else{
			\Session::flash('message',__('Message.login_false'));
		}
		return $status;
	}

	public function regist($input)
	{
		$status = false;
		DB::beginTransaction();
		try{
			$result = $this->doRegistCustomer($input);
			if($result){
				DB::commit();
				$status = $this->login($result);
			}else{
				DB::rollback();
				\Session::flash('message',__('Message.create_account_false'));
				$status = false;
			}	
		}catch(\Exception $e){
			\Log::error($e->getMessage());
			DB::rollback();
			\Session::flash('message',__('Message.create_account_false'));
			$status = false;
		}
		return $status;
	}

	public function logout()
	{
		if(\Session::has('customer')){
			\Session::forget('customer');
		}
		return false;
	}

	private function doRegistCustomer($input)
	{
		$data_input['updated_at'] = now();
		$data_input['created_at'] = now();
		$id_social_links = $this->social_linksRepository->createAndGetID($data_input);
		$data_input['profile_fullname'] = $input['fullname']; 
		$id_profiles = $this->profilesRepository->createAndGetID($data_input);
		$data_input['social_links_id'] = $id_social_links;
		$data_input['profiles_id'] = $id_profiles;
		$data_input['email'] = $input['email'];
		$data_input['password'] = \Hash::make($input['password']);
		unset($data_input['profile_fullname']);
		unset($input['fullname']);
		$this->customersRepository->create($data_input);
		return $input;
	}
}