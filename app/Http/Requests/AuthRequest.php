<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class AuthRequest extends FormRequest
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
                
        ];
    }
    /**
     * Message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'firstname.required' => 'Email is required!',
            'middlename.required' => 'Name is required!',
            'lastname.required' => 'Password is required!',
            'lastname.alpha' => 'lastname contains a number or special character'
        ];
    }
}
