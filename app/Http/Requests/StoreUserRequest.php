<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'staff_Id' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'admin_Post' =>'required',
            'tel_No' => 'required',
            'date_Of_Employment' => 'required',
            'application_Number' => 'required',
            'department_Id' => 'required',
        ];
    }
}
