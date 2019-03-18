<?php

namespace App\Service;

class HelpsService
{
	public function CheckCapcha($request)
	{
	       $verifyUrl = env('GOOGLE_CAPTCHA_VERIFY_LINK', 'https://www.google.com/recaptcha/api/siteverify');
                $ch = curl_init($verifyUrl);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch, CURLOPT_POST, count($request));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec ($ch);
                curl_close ($ch);
                return $result;
	}

        public function update_session_customer($data_change){
                $data_old = \Session::get('customer')->toArray();
                $data_new = array_merge($data_old,$data_change);
                $data_new = collect($data_new);
                \Session::put("customer",$data_new);
        }

        public function listDataToSearch(){
                $dataCountry = config('datacustom.country');
                $dataCity = [];
                $dataDistrict = [];
                $dataProject = [];
                $dataArea = config('datacustom.search.option_area');
                $dataBedroom = config('datacustom.search.option_bedrooms');
                $dataBathroom = config('datacustom.search.option_bathrooms');
                $dataMinPrice = config('datacustom.search.option_minprice');
                $dataMaxPrice = config('datacustom.search.option_maxprice');
                $data = [
                        'country' => $dataCountry,
                        'city' => $dataCity,
                        'district' => $dataDistrict,
                        'project' => $dataProject,
                        'area' => $dataArea,
                        'bedrooms' => $dataBedroom,
                        'bathrooms' => $dataBathroom,
                        'minprice' => $dataMinPrice,
                        'maxprice' => $dataMaxPrice,
                ];
                return $data;
        }

        public function listDataAddress(){
                $dataCountry = config('datacustom.country');
                $dataCity = [];
                $dataDistrict = [];
                $dataProject = [];
                $dataStreet = [];
                $dataWard = [];
                $data = [
                        'country' => $dataCountry,
                        'city' => $dataCity,
                        'district' => $dataDistrict,
                        'project' => $dataProject, 
                        'street' => $dataStreet,
                        'ward' =>  $dataWard
                ];
                return $data;
        }
}