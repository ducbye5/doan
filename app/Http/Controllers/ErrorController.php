<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error403()
    {
    	return view('Error.403');
    }
    public function error404()
    {
    	return view('Error.404');
    }
    public function error503()
    {
    	return view('Error.503');
    }
}
