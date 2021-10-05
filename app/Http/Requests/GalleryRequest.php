<?php

namespace App\Http\Requests;

use App\Response;
use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,bmp,png,svg',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name ' . Response::REQUIRED,
            'name.string' => 'name ' . Response::MUST_BE_A_STRING,
            'image.required' => 'image ' . Response::REQUIRED,
            'image.mimes' => 'file ' . Response::MUST_BE_AN_IMAGE,
        ];
    }
}
