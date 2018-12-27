<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\A_UserService;
use App\Service\FileService;
use App\Http\Requests\RegistUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\ChangeRoleRequest;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\Interfaces\ProfilesRepositoryInterface;
use App\Repository\Interfaces\Social_linksRepositoryInterface;

class UserController extends Controller
{
	private $a_UserService;
	private $userRepository;
	private $profilesRepository;
	private $social_linksRepository;
	private $fileService;
    public function __construct(
    	A_UserService $a_UserService,
    	UserRepositoryInterface $UserRepository,
    	ProfilesRepositoryInterface $ProfilesRepository,
    	Social_linksRepositoryInterface $Social_linksRepository,
    	FileService $FileService
    )
    {
    	$this->a_UserService = $a_UserService;
    	$this->userRepository = $UserRepository;
    	$this->profilesRepository = $ProfilesRepository;
    	$this->social_linksRepository = $Social_linksRepository;
    	$this->fileService = $FileService;
    }

    public function index()
	{
		$data = $this->a_UserService->index();
		$view = $data['view'];
		$response = $data['data'];
		return view($view)->with('response',$response);
	}

	public function enableUser($id)
	{
		$active = 'enable';
		$this->a_UserService->activeUser($active,$id);
		return redirect()->back();
	}

	public function disableUser($id)
	{
		$active = 'disable';
		$this->a_UserService->activeUser($active,$id);
		return redirect()->back();
	}

	public function showViewCreate()
	{
		$data = $this->a_UserService->showViewCreate();
		$view = $data['view'];
		return view($view);
	}

	public function showViewRole()
	{
		$data = $this->a_UserService->showViewRole();
		$view = $data['view'];
		$response = [
			'data' => $data['data'],
			'role' => $data['role']
		];
		return view($view)->with('response',$response); 
	}

	public function changeRole(ChangeRoleRequest $request)
	{
		$input = $request->all();
		$this->a_UserService->changeRole($input);
		return redirect()->back();
	}

	public function regist(RegistUserRequest $request)
	{
		$email = $request->email;
		$password = $request->password;
		$input = ['email'=>$email,'password'=>$password];
		$route = $this->a_UserService->regist($input);
		return redirect(route($route));	
	}

	public function edit(UpdateUserRequest $request,$id)
	{
		$input = $request->all();
		$input['sex'] = $input['sex']??Null;
		$dataImage = $input['avatar']??'';
		if($dataImage != ''){
			$defaultUserImage = 'default.png';
			$pathStore = 'upload/image/user/';
			$newFileName = $this->fileService->getName($dataImage);
			$newFileName = time(0).$newFileName;
			$this->fileService->uploadFile($dataImage,$pathStore,$newFileName);
			$column_profile_id = ['profile_id'];
			$profile_id = $this->userRepository->findByID($id,$column_profile_id);
			$profile_id = $profile_id[0]['profile_id'];
			$column_profile_avatar = ['profile_avatar'];
			$oldFileName = $this->profilesRepository->findByID($profile_id,$column_profile_avatar);
			$oldFileName = $oldFileName[0]['profile_avatar'];
			$this->fileService->deleteFile($oldFileName,$pathStore,$defaultUserImage);
		}else{
			$newFileName = '';
		}
		$result = $this->a_UserService->edit($id,$input,$newFileName);
		return redirect()->back();	
	} 

	public function delete($id)
	{
		$result = $this->a_UserService->delete($id);
		$oldFileName = $result['oldFileName'];
		$pathStore = 'upload/image/user/';
		$defaultUserImage = 'default.png';
		$this->fileService->deleteFile($oldFileName,$pathStore,$defaultUserImage);
		$route = $result['route'];
		return redirect(route($route));
	}

	public function getProfile($id)
	{
		$result  = $this->a_UserService->getProfile($id);
		$view = $result['view'][0];
		$response = $result['data'];
		return view($view)->with('response',$response);
	}

	public function getNotification($id)
	{
		
	}

	public function getMail($id)
	{
		
	}
}
