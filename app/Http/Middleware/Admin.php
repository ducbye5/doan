<?php

namespace App\Http\Middleware;
use App\Service\A_UserService;
use Closure;

class Admin
{
    private $a_UserService;
    public function __construct(
        A_UserService $a_UserService
    ){
        $this->a_UserService = $a_UserService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Auth::user()->active == 'disable')
        {
            \Auth::logout();
            return redirect()->back();
        }
        else{
            $profile = $this->a_UserService->getProfile();
            \View::share('profile',$profile);
            return $next($request);
        }
    }
}
