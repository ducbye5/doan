<?php

namespace App\Service;
use App\Repository\Interfaces\ProfilesRepositoryInterface;
use App\Repository\Interfaces\Social_linksRepositoryInterface;
use App\Repository\Interfaces\UserRepositoryInterface;
use DB;
use Exception;
class A_UserService
{
	private $profilesRepository;
	private $social_linksRepository;
	private $userRepository;
	public function __construct(
		ProfilesRepositoryInterface $ProfilesRepository,
		Social_linksRepositoryInterface $Social_linksRepository,
		UserRepositoryInterface $UserRepository
	)
	{
		$this->profilesRepository = $ProfilesRepository;
		$this->social_linksRepository = $Social_linksRepository;
		$this->userRepository = $UserRepository;
	}

	public function index()
	{
		$column = ['profile_fullname','role','active','users.id'];
		$dataprofile = $this->userRepository->getDataForList($column);
		$view  = 'Admin.User.index';
		$result = array('view'=>$view,'data'=>$dataprofile);
		return $result;
	}

	public function showViewCreate()
	{
		$view = 'Admin.User.create';
		$result = array('view'=>$view);
		return $result;
	}

	public function activeUser($active,$id)
	{
		$result = $this->userRepository->updateActiveUser($active,$id);
		return $result;
	}

	public function regist($input)
	{
		DB::beginTransaction();
		try{
			$result = $this->insertDataToRegistAccount($input);
			if($result){
				DB::commit();
				$route = 'admin.user.list';
			}else{
				DB::rollBack();
				$route = 'error.503';
			}
		}catch(Exception $e){
			\Log::error($e->getMessage());
			DB::rollBack();
			$route = 'error.503';
		}
		return $route;
	}

	public function showViewRole()
	{
		$column = ['profile_fullname','role','users.id','email'];
		$view = 'Admin.User.role';
		$dataprofile = $this->userRepository->getDataForList($column);
		$role = (object)[
				'admin','managers','visiter'
			];
		$userRole = \Auth::user()->role;
		if($userRole == 'admin'){
			$role = (object)[
				'managers','visiter'
			];
		}
		$result = array('view'=>$view,'data'=>$dataprofile,'role'=>$role);
		return $result;
	}

	public function changeRole($input)
	{
		$response = false;
		DB::beginTransaction();
		try{
			$role = $input['role'];
			$email = $input['email'];
			$result = $this->userRepository->updateRoleByEmail($role,$email);
			DB::commit();
			$response = true;
		}catch(Exception $e){
			DB::rollback();
			\Log::error($e->getMessage());                                    
		}
		return $response;
	}

	public function edit($id,$input,$newFileName = '')
	{
		DB::beginTransaction();
		try{
			$edit_profile = [
				'profile_fullname'=>$input['fullname'],
				'profile_sex'=>$input['sex'],
				'profile_birthday'=>$input['birthday'],
				'profile_address'=>$input['address'],
				'profile_telephone'=>$input['telephone'],
				'profile_description'=>$input['description'],
			];
			$edit_social_link = [
				'facebook' => $input['facebook'],
				'twitter' => $input['twitter'],
				'linkedin' => $input['linkedin'],
				'pinterest' => $input['pinterest'],
				'skype' => $input['skype'],
			];
			if($newFileName != ''){
				$edit_profile = array_merge($edit_profile,['profile_avatar'=>$newFileName]);
			}
			$column = ['profile_id','social_links_id'];
			$user = $this->userRepository->findByID($id,$column);
			$this->edit_social_link($user[0]['social_links_id'],$edit_social_link);
			$this->edit_profile($user[0]['profile_id'],$edit_profile);
			DB::commit();
			return true;
		}catch(Exception $e){
			\Log::error($e->getMessage());
			DB::rollBack();
			return false;
		}
	}

	private function edit_social_link($social_links_id,$input)
	{
		$result = $this->social_linksRepository->updateByID($social_links_id,$input);
		return $result;
	}

	private function edit_profile($profile_id,$input)
	{
		$result = $this->profilesRepository->updateByID($profile_id,$input);
		return $result;
	}

	public function delete($id)
	{
		DB::beginTransaction();
		try{
			$column = ['profile_id','social_links_id'];
			$result = $this->userRepository->findByID($id,$column);
			$profile_id = $result[0]['profile_id'];
			$social_links_id = $result[0]['social_links_id'];
			$column_profile_avatar = ['profile_avatar'];
			$oldFileName = $this->profilesRepository->findByID($profile_id,$column_profile_avatar);
			$oldFileName = $oldFileName[0]['profile_avatar'];
			$this->userRepository->deleteByID($id);
			$this->profilesRepository->deleteByID($profile_id);
			$this->social_linksRepository->deleteByID($social_links_id);
			DB::commit();
			$route = 'admin.user.list';
			$arr_result = ['route'=>$route,'oldFileName'=>$oldFileName];
			return $arr_result;
		}catch(Exception $e){
			\Log::error($e->getMessage());
			DB::rollBack();
			return false;
		}
		
	}

	public function getProfile($id = Null)
	{
		if($id == Null){
			$user = \Auth::user();
        	$profile_id = $user->profile_id;
        	$user_arr = array($user->id,$user->role);
        	$column_profile = ['profile_avatar'];
	        $profile = $this->profilesRepository->findByID($profile_id,$column_profile);
	        $profile = array_merge($profile,$user_arr);
	        return $profile;
		}
		else{
			$user = $this->userRepository->findByID($id);
	        $profile = $this->profilesRepository->findByID($user[0]['profile_id']);
	        $social_link = $this->social_linksRepository->findByID($user[0]['social_links_id']);
	        $view = ['Admin.User.profile'];
	        $profile = array_merge($profile,$social_link,$user);
	        $result = array('view'=>$view,'data'=>$profile);
	        return $result;
		}
	}

	public function getNotification($id)
	{
		
	}

	public function getMail($id)
	{
		
	}

	private function insertDataToRegistAccount($input)
	{
		$time['created_at'] = now();
		$time['updated_at'] = now();
		$profile_id = $this->profilesRepository->createAndGetID($time);
		$social_links_id = $this->social_linksRepository->createAndGetID($time);
		$input['profile_id'] = $profile_id;
		$input['social_links_id'] = $social_links_id;
		$input['password'] = \Hash::make($input['password']);
		$input = array_merge($input,$time);
		$result = $this->userRepository->registAccount($input);
		return $result;
	}
}