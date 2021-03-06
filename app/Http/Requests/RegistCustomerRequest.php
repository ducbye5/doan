<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistCustomerRequest extends FormRequest
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
            'fullname' => 'string|nullable',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|max:100',
        ];
    }

    public function messages(){
        return [
            'fullname.string' => __('Request.string'),
            'fullname.nullable' => __('Request.string'),
            'email.required' => __('Request.required'),
            'email.string' => __('Request.string'),
            'email.email' => __('Request.email'),
            'email.max' => __('Request.max'),
            'password.required' => __('Request.required'),
            'password.string' => __('Request.string'),
            'password.min' => __('Request.min'),
            'password.max' => __('Request.max'),
        ];
    }
}
