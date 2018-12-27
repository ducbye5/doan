<?php

namespace App\Http\Middleware;

use Closure;
use App\Repository\Interfaces\ProfilesRepositoryInterface;
use App\Repository\Interfaces\Social_linksRepositoryInterface;

class Customer
{

    private $profilesRepository;
    private $social_linksRepository;

    public function __construct(
        ProfilesRepositoryInterface $ProfilesRepository,
        Social_linksRepositoryInterface $Social_linksRepository
    ){
        $this->profilesRepository = $ProfilesRepository;
        $this->social_linksRepository = $Social_linksRepository;
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
        if(\Session::has('customer'))
        {
            $data_customer = \Session::get('customer')->toArray();
            $profiles_id = $data_customer['profiles_id'];
            $array_profile = $this->profilesRepository->findByID($profiles_id);
            $social_links_id = $data_customer['social_links_id'];
            $array_social_links = $this->social_linksRepository->findByID($social_links_id);
            $data_customer = array_merge($data_customer,$array_profile,$array_social_links);
            \View::share('customer',$data_customer);
        }
        return $next($request);
    }
}
