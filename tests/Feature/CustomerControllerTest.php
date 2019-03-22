<?php

namespace Tests\Feature;
use Tests\TestCase;

class CustomerControllerTest extends Testcase
{

	/**
	*	@group testtest
	**/
	
	public function test()
	{
		$this->login();
		$response = $this->get('/admin/user/profile/1');
		//$response = $this->get('/login');
		$response->assertStatus(302);
		dd($response);
		$result = $this->getResponseViewContent($response, 'response');
		$expected_result = [
						    "id" => 22,
						    "email" => "admin@gmail.com",
						    "role" => "administrator",
						    "active" => "enable",
						    "profile_id" => 1,
						    "social_links_id" => 1,
						    "created_at" => "2018-10-08 00:00:00",
						    "updated_at" => "2018-10-08 00:00:00"
						  ];
		$this->assertEquals($result[2],$expected_result);
	}
}