<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class StaffDetails extends Model
{
    //


    protected $fillable = [
        'staff_Id','first_Name','middle_Name',
        'last_Name','designation','admin_Post',
        'tel_No','date_Of_Employment','application_Number'
    ];


    public function login(){
        return $this->hasOne(Logins::class);
    }
  public function department(){
        return $this->belongsTo(Department::class);
  }

}
