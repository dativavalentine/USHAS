<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Models\Logins;
use App\Models\StaffDetails;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(Request $request){

        $matchThese = ['username'=>$request->username,'password'=>$request->password];
        $staff = Logins::where($matchThese)->get();

        return response($staff,200);
    }
}
