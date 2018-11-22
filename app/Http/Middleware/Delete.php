<?php

namespace App\Http\Middleware;

use Closure;
use App\Repository\Interfaces\UserRepositoryInterface;
class Delete
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
        $idRequest = $request->route('id');
        $roleRequest = $this->userRepository->findByID($idRequest,['role']);
        $roleRequest = $roleRequest[0]['role'];
        $userRole = \Auth::user()->role;
        $userId = \Auth::user()->id;
        if(($userRole == 'administrator' && $userId != $idRequest) || ($userRole == 'admin' && $userId != $idRequest && $roleRequest != 'administrator' && $roleRequest != 'admin'))
        {
            return $next($request);
        }
        return redirect(route('error.404'));
    }
}
