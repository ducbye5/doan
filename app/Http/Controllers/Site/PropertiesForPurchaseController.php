<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesForPurchaseController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
    	return view('Site.PurchaseAndRent');
    }

    public function getList_Dwelling_house()
    {
    	return view('Site.PurchaseAndRent');
    }

    public function getList_Apartment()
    {
    	return view('Site.PurchaseAndRent');
    }

    public function getList_Land()
    {
    	return view('Site.PurchaseAndRent');
    }

    public function getList_Other_real_estate()
    {
    	return view('Site.PurchaseAndRent');
    }
}
