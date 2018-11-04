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
        $rulesStudyWork = [];
        for ($i = 0; $i < 3; $i++) {
            $rulesStudyWork += [
                "studyname{$i}" => 'required',
                "professionstudy{$i}" => 'required',
                "doctor{$i}" => 'required',
                "workname{$i}" => 'required',
                "professionwork{$i}" => 'required'
            ];
        }
        return [
            'name' => 'required',
            'surname' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'address' => 'required'] +
            $rulesStudyWork +
            ['interests' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ];
    }
}
