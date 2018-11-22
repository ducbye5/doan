<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
    	return view('Site.Faq');
    }
}
