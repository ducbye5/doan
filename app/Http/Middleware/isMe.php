<?php

namespace App\Http\Middleware;

use Closure;

class isMe
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
        if(\Auth::user()->role == 'administrator' || \Auth::user()->id == $request->route('id'))
        {
            return $next($request);
        }
        return redirect(route('error.404'));
    }
}
