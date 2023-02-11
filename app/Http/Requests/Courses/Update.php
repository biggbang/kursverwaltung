<?php

namespace App\Http\Requests\Courses;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest 
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
			'coursename' => 'required|max:50',
			'skills' => 'nullable|max:250',
			'tools' => 'nullable|max:250',
			'material' => 'nullable|max:250',
			'charge' => 'required|numeric',
			'duration' => 'required',
			'max_participants' => 'required',
			'min_participants' => 'required',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
     
        ];
    }

}
