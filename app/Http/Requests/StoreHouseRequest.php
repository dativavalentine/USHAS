<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreHouseRequest extends FormRequest
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
            //Information of Houses
            'house_Category' => 'required',
            'no_Of_Bedrooms' => 'required',
            'house_number' => 'required',
            'staff_Id'=>'required',
            'location'=>'required',
        ];
    }
}
