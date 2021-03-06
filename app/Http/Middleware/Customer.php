<?php

namespace App\Http\Middleware;

use Closure;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Session::has('customer'))
        {
            $data_customer = \Session::get('customer');
            \View::share('customer',$data_customer);
        }
        return $next($request);
    }
}
