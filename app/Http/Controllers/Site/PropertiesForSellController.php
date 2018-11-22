<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesForSellController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
    	return view('Site.SellAndRental');
    }

    public function getList_Dwelling_house()
    {
    	return view('Site.SellAndRental');
    }

    public function getList_Apartment()
    {
    	return view('Site.SellAndRental');
    }

    public function getList_Land()
    {
    	return view('Site.SellAndRental');
    }

    public function getList_Other_real_estate()
    {
    	return view('Site.SellAndRental');
    }
}
