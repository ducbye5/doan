<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\A_HomeService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $a_HomeService;
    public function __construct(A_HomeService $A_HomeService)
    {
        $this->a_HomeService = $A_HomeService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = $this->a_HomeService->index();
        return view($view);
    }

    public function logout()
    {
        $url = $this->a_HomeService->logout();
        return redirect($url);
    }
}
