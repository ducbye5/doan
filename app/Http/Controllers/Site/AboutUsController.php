<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
    	return view('Site.AboutUs');
    }
}
