<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=100,min_height=100',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required'

        ];
    }

    /**
     * Custom validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
           //'avatar.required'=>'The avatar field can not be null',
        ];
    }
}
