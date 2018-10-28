<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createResumeRequest extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'address' => 'required',
            'studyname' => [
                '0' => 'required',
                '1' => 'required',
                '2' => 'required'
                ],
            'professionstudy' => [
                '0' => 'required',
                '1' => 'required',
                '2' => 'required'
            ],
            'doctor' => [
                '0' => 'required',
                '1' => 'required',
                '2' => 'required'
            ],
            'workname' => [
                '0' => 'required',
                '1' => 'required',
                '2' => 'required'
            ],
            'professionwork' => [
                '0' => 'required',
                '1' => 'required',
                '2' => 'required'
            ],
            'interests' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
