<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\PostNewsRequest;
use App\Http\Requests\RegistUserRequest;
use App\Service\HelpsService;
use App\Service\S_PostNewsService;
use App\Http\Controllers\Controller;

class PostNewsController extends Controller
{
    private $helpsService;
    private $s_PostNewsService;
    public function __construct(
        HelpsService $HelpsService,
        S_PostNewsService $S_PostNewsService
    ){
        $this->helpsService = $HelpsService;
        $this->s_PostNewsService = $S_PostNewsService;
    }

    public function index()
    {
        $view = $this->s_PostNewsService->index();
    	return view($view);
    }

    public function regist(PostNewsRequest $request)
    {
        $request = $request->all();
        $request_capcha = [
            'secret' => env('GOOGLE_CAPTCHA_SECRET'),
            'response' => $request['g-recaptcha-response']
        ];
        //$result_regist = $this->s_PostNewsService->regist($request);dd($result_regist);
        $verifyCaptcha = json_decode($this->helpsService->CheckCapcha($request_capcha));
        if($verifyCaptcha->success){
            $result_regist = $this->s_PostNewsService->regist($request);
            $this->put_notification_of_regist_news($result_regist['status'],$result_regist['message']);
        }else{
            $status = false;
            $message = __('PostNews.time_out');
            $this->put_notification_of_regist_news($status,$message);
        }
        return redirect()->back();
    }

    private function put_notification_of_regist_news($status = false,$message = null){
        if($status){
            \Log::debug('__REGIST_NEWS_IS_SUCCESS__');
        }else{
            \Log::debug('__REGIST_NEWS_IS_FALSE__');
        }
        if($message == null){
            \Session::flash('post_news_noti',__('PostNews.regist_fail'));
        }else{
            \Session::flash('post_news_noti',$message);
        }
    }
}
