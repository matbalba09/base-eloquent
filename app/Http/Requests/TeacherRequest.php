<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Response;

class TeacherRequest extends FormRequest
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
            'firstname' => 'required|string',
            // 'middlename' => 'string',
            'lastname' => 'required|string',
            'email' => 'required|string|unique:users',
            'contact' => 'required',
            'age' => 'required|integer',
            'avatar' => 'required|mimes:jpg,bmp,png,svg'
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
            'firstname.required' => 'firstname '.Response::REQUIRED,
            // 'middlename.required' => 'middlename '+Response::REQUIRED,
            'lastname.required' => 'lastname '.Response::REQUIRED,
            'contact.required' => 'contact '.Response::REQUIRED,
            'avatar.required' => 'avatar '.Response::REQUIRED,
            'age.required' => 'age '.Response::REQUIRED,
            'firstname.string' => 'firstname '.Response::MUST_BE_A_STRING,
            // 'middlename.string' => 'middlename '.Response::MUST_BE_A_STRING,
            'lastname.string' => 'lastname '.Response::MUST_BE_A_STRING,
            // 'contact.integer' => 'contact '.Response::MUST_BE_AN_INTEGER,
            'age.integer' => 'age '.Response::MUST_BE_AN_INTEGER,
            'email.unique' => 'email '.Response::MUST_BE_UNIQUE,
            'avatar.mimes' => 'avatar '.Response::MUST_BE_AN_IMAGE,
        ];
    }
}
