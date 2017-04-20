<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Create the model

    //
    protected $fillable = [
       'role_Id','role_Name','authority_Id'

    ];


    public function authority()
    {
        return $this->hasMany(authorities::class);


    }


    }
