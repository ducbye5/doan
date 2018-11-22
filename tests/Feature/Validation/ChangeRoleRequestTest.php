<?php

namespace tests\Feature\Validation;
use App\Http\Requests\ChangeRoleRequest;
use Validator;
use Tests\TestCase;

	/**
	*	@group ChangeRoleRequest
	**/
class ChangeRoleRequestTest extends TestCase
{
	public function testChangeRoleRequestTest()
    {
        $expected_results = [
            'email' => [
                0 => 'The email must be a valid email address.'
            ],
            'role' => [
                0 => 'The role must be a string.'
            ]
        ];
        $data = [
            'email' => '123',
            'role' => 1
        ];
        $request = new ChangeRoleRequest();
        $rules = $request->rules();
        $validator = Validator::make($data, $rules);
        $result = $validator->messages()->messages();
        $this->assertEquals($result,$expected_results);
    }
}