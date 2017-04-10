<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Logins extends Model
{
    //
    use HasApiTokens, Notifiable;

    protected $fillable =[
        'username','staff_id','password'
    ];

    protected $hidden = [
        'password'
    ];

    public function staff(){
        return $this->belongsTo(StaffDetails::class);
    }
}
