<?php

namespace App\Http\Middleware;
use App\Service\S_IndexService;

use Closure;

class Site
{

    private $s_IndexService;
    public function __construct(
        S_IndexService $S_IndexService
    ){
        $this->s_IndexService = $S_IndexService;
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
        $data = $this->s_IndexService->getSomeInformationOfCompany();
        \View::share('company',$data);
        return $next($request);
    }
}
