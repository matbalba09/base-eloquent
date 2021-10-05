<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Response;

class StudentRequest extends FormRequest
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
            'middlename' => 'required|string',
            'lastname' => 'required|string'
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
            'firstname.required' => 'firstname '+Response::REQUIRED,
            'middlename.required' => 'middlename '+Response::REQUIRED,
            'lastname.required' => 'lastname '+Response::REQUIRED,
            'firstname.string' => 'firstname '+Response::MUST_BE_A_STRING,
            'middlename.string' => 'middlename '+Response::MUST_BE_A_STRING,
            'lastname.string' => 'lastname '+Response::MUST_BE_A_STRING,
        ];
    }
}
