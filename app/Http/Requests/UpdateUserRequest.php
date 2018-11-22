<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'avatar' =>'image|nullable|max:3000|mimes:jpg,jpeg,png',
            'sex' => 'string|max:5|nullable',
            'birthday' => 'date|nullable',
            'address' => 'string|nullable',
            'telephone' => 'string|min:9|max:20|nullable',
            'description' => 'string|nullable',
            'facebook' => 'string|nullable',
            'twitter' => 'string|nullable',
            'linkedin' => 'string|nullable',
            'pinterest' => 'string|nullable',
            'skype' => 'string|nullable',
        ];
    }

    public function messages(){
        return [
            'fullname.string' => __('Request.string'),
            'fullname.nullable' => __('Request.nullable'),
            'avatar.image' => __('Request.image'),
            'avatar.nullable' => __('Request.nullable'),
            'avatar.max' => __('Request.max'),
            'avatar.mimes' => __('Request.mimes'),
            'sex.string' => __('Request.string'),
            'sex.max' => __('Request.max'),
            'sex.nullable' => __('Request.nullable'),
            'birthday.date' => __('Request.date'),
            'birthday.nullable' => __('Request.nullable'),
            'address.string' => __('Request.string'),
            'address.nullable' => __('Request.nullable'),
            'telephone.string' => __('Request.string'),
            'telephone.min' => __('Request.min'),
            'telephone.max' => __('Request.max'),
            'telephone.nullable' => __('Request.nullable'),
            'description.string' => __('Request.string'),
            'description.nullable' => __('Request.nullable'),
            'facebook.string' => __('Request.string'),
            'facebook.nullable' => __('Request.nullable'),
            'twitter.string' => __('Request.string'),
            'twitter.nullable' => __('Request.nullable'),
            'linkedin.string' => __('Request.string'),
            'linkedin.nullable' => __('Request.nullable'),
            'pinterest.string' => __('Request.string'),
            'pinterest.nullable' => __('Request.nullable'),
            'skype.string' => __('Request.string'),
            'skype.nullable' => __('Request.nullable'),
        ];
    }
}
