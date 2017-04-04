<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class House extends Model
{
    //
    protected $fillable = [
      'house_Category','no_Of_Bedrooms','house_number','staff_Id','location'
    ];


    public function staff(){
        return $this->belongsTo(StaffDetails::class);





    }
}
