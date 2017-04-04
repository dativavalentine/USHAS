<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClearenceRequest extends FormRequest
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
            //Return the clearence info

            'staff_Id' => 'required',
            'description' => 'required',
            'house_number' => 'required',
            'quantity'=>'required',
            'remarks'=>'required',
        ];
    }
}
