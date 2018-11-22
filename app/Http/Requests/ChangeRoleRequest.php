<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'string|email|max:255',
            'role' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'email.string' => __('Request.string'),
            'email.email' => __('Request.email'),
            'email.max' => __('Request.max'),
            'role.string' => __('Request.string'),
            'role.min' => __('Request.min')
        ];
    }
}
