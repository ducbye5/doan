<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\TestResponse;
class CustomerControllerTest extends Testcase
{

	public function login($data = null){
		//$user = factory(\App\User::class)->create();
		
		$user = factory(\App\User::class)->make($data);

        $this->actingAs($user);
        return $this;
    }
	/**
	*	@group testtest
	**/
	
	public function test()
	{
		$data =  [
		        'email' => 'admin1@gmail.com',
		        'password' => '$2y$10$9S.sOadAQUd9u7iiG9nKbuV4Yhs3cInxqT8IXhfZmlCBJKaG4RVKq', // secret
		        'role' => 'administrator',
		        'active' => 'enable',
		        'profile_id' => 1,
		        'social_links_id' => 1,
		        'remember_token' => str_random(10),
		        'created_at' => '2018-10-08 00:00:00',
		        'updated_at' => '2018-10-08 00:00:00'
		    ];
		//$this->login($data);
		$response = $this->get('/admin/user/profile/22');
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


	


	public function getResponseViewContent(TestResponse $response, $key)
    {
        //$org_content = $response->baseResponse->content();
        $org_content = $response->baseResponse->getOriginalContent();
        $value = $org_content->getData()[$key];
        return $value;
    }
}