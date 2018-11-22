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
		$response = $this->get('/index');
		$response->assertStatus(200);
	}
}