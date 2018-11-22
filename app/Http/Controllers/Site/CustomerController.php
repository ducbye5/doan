<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\S_CustomerService;
use App\Http\Requests\LoginCustomerRequest;
use App\Http\Requests\RegistCustomerRequest;

class CustomerController extends Controller
{
	private $s_CustomerService;
    public function __construct(
    	S_CustomerService $S_CustomerService
    ){
    	$this->s_CustomerService = $S_CustomerService;
    }

    public function login(LoginCustomerRequest $request)
    {
    	$input['email'] = $request->email;
    	$input['password'] = $request->password;
    	$this->s_CustomerService->login($input);
    	return redirect()->back();
    }

    public function regist(RegistCustomerRequest $request)
    {
    	$input['fullname'] = $request->fullname;
    	$input['email'] = $request->email;
    	$input['password'] = $request->password;
    	$this->s_CustomerService->regist($input);
    	return redirect()->back();
    }

    public function logout()
    {
    	$this->s_CustomerService->logout();
    	return redirect()->back();
    }

    public function edit()
    {
        $view = 'Site.EditProfileCustomer';
        return view($view);
    }
}
