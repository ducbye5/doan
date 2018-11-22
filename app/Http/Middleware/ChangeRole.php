<?php

namespace App\Http\Middleware;

use Closure;
use App\Repository\Interfaces\UserRepositoryInterface;

class ChangeRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $userRepository;
    public function __construct(UserRepositoryInterface $UserRepository){
        $this->userRepository = $UserRepository;
    }
    public function handle($request, Closure $next)
    {
        $emailRequest = $request->email;
        $result = $this->userRepository->findByEmail($emailRequest,['role','id']);
        $role = $result[0]['role'];
        $id = $result[0]['id'];
        $userRole = \Auth::user()->role;
        $userId = \Auth::user()->id;
        if(($userRole == 'administrator' && $userId != $id) || ($userRole == 'admin' && $userId != $id && $role != 'administrator' && $role != 'admin'))
        {
            return $next($request);
        }
        return redirect(route('error.404'));
    }
}
