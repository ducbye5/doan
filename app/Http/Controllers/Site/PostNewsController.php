<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\PostNewsForSellRequest;
use App\Http\Requests\PostNewsForPurchaseRequest;
use App\Http\Requests\RegistUserRequest;
use App\Service\HelpsService;
use App\Http\Controllers\Controller;

class PostNewsController extends Controller
{
    private $helpsService;
    public function __construct(HelpsService $HelpsService){
        $this->helpsService = $HelpsService;
    }

    public function index()
    {
    	return view('Site.PostNews');
    }

    public function registSell(PostNewsForSellRequest $request)
    {
        $request = $request->all();
        dd($request);
        $request_capcha = [
            'secret' => env('GOOGLE_CAPTCHA_SECRET'),
            'response' => $request['g-recaptcha-response']
        ];
        $verifyCaptcha = json_decode($this->helpsService->CheckCapcha($request_capcha));
    	dd($verifyCaptcha->success);
    }

    public function registPurchase(PostNewsForPurchaseRequest $request)
    {
    	//dd($request);
        $request = $request->all();
        $request_capcha = [
            'secret' => env('GOOGLE_CAPTCHA_SECRET'),
            'response' => $request['g-recaptcha-response']
        ];
        $verifyCaptcha = json_decode($this->helpsService->CheckCapcha($request_capcha));
        dd($verifyCaptcha->success);
    }
}
