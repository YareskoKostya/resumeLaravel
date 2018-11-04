<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
    public function rules(Request $request)
    {
        $rulesStudy = [];
        for ($i = 0; $i < count($request->datebeginstudy); $i++) {
            $rulesStudy += [
                "datebeginstudy.{$i}" => 'required',
                "dateendstudy.{$i}" => 'required',
                "studyname.{$i}" => 'required',
                "professionstudy.{$i}" => 'required',
                "doctor.{$i}" => 'required'
            ];
        }
        $rulesWork = [];
        for ($j = 0; $j < count($request->datebeginwork); $j++) {
            $rulesWork += [
                "datebeginwork.{$j}" => 'required',
                "dateendwork.{$j}" => 'required',
                "workname.{$j}" => 'required',
                "professionwork.{$j}" => 'required'
            ];
        }
        return [
            'name' => 'required',
            'surname' => 'required',
            'birthdate' => 'required',
            'country' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ] + $rulesStudy + $rulesWork + [
            'interests' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ];
    }
}
