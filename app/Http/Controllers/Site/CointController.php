<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CointController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
    	$view = 'Site.Coint';
    	return view($view);
    }
}
