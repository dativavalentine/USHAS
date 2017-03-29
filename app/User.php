<?php

namespace App;

use App\Models\StaffDetails;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable =[
        'email','staff_id','password'
    ];
    protected $hidden = [
        'password'
    ];

    public function staff(){
        return $this->belongsTo(StaffDetails::class);
    }



}
