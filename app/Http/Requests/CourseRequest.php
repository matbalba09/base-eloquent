<?php

namespace App\Http\Requests;

use App\Response;
use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            //
            'title' => 'required|string',
            'description' => 'string',
            'duration' => 'required|integer',
            'level' => 'required|integer',
            'image' => 'required|mimes:jpg,bmp,png,svg'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'title '.Response::REQUIRED,
            'description.string' => 'description '.Response::MUST_BE_A_STRING,
            'duration.required' => 'duration '.Response::REQUIRED,
            'duration.integer' => 'duration '.Response::MUST_BE_AN_INTEGER,
            'level.required' => 'level '.Response::REQUIRED,
            'level.integer' => 'level '.Response::MUST_BE_AN_INTEGER,
            'image.required' => 'image '.Response::REQUIRED,
            'image.mimes' => 'image' . Response::MUST_BE_AN_IMAGE,
        ];
    }
}
