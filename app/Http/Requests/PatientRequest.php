<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'firstname'=>'required|max:10',
            'lastname'=>'required|max:10',
            'sex'=>'required',
            'mobile'=>'required|max:11|min:11',
            'email'=>'required|max:25|email',
            'password'=>'required|min:6',
            'cpassword'=>'required|min:6'

        ];
    }
}
