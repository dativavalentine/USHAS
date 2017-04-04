<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            //Return the details of the application
            'id'=>'required',
            'apply_Date' => 'required',
            'staff_Id' => 'required',
            'application_Type' => 'required',
            'approved_By_Officer'=>'required',
            'approved_By_Housing_Officer'=>'required',
            'confirmation'=>'required',
        ];
    }
}
