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
}