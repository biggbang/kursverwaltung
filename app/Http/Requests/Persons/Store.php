<?php

namespace App\Http\Requests\Persons;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest 
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
			'salutationID' => 'required|exists:salutations,id',
			'lastname' => 'required|max:50',
			'name' => 'required|max:50',
			'organisation' => 'nullable|max:100',
			'street' => 'required|max:50',
			'ZIP_code' => 'required|max:10',
			'city' => 'required|max:50',
			'comment' => 'nullable|max:255',
			'customer_since' => 'required|date',
			'supplier_since' => 'required|date',
			'instructor_since' => 'required|date',
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
