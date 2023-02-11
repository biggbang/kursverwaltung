<?php

namespace App\Http\Requests\Presentations;

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
			'event_name' => 'required|max:50',
			'start_date' => 'required|date',
			'end_date' => 'required|date',
			'dailygrid_start' => 'required|date',
			'dailygrid_end' => 'required|date',
			'starttime_firstday' => 'nullable|date',
			'endtime_lastday' => 'nullable|date',
			'participants_qty' => 'required',
			'charge' => 'required|numeric',
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
