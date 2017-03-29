<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Logins;
use App\Models\StaffDetails;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function register(StoreUserRequest $request){
       /* $staff = new StaffDetails();
        $staff->staff_Id = $request->username;
        $staff->first_name = 'dativa';
        $staff->middle_name = 'dativa';
        $staff->last_name = 'dativa';
        $staff->designation = 'dativa';
        $staff->college = 'dativa';
        $staff->admin_Post = 'dativa';
        $staff->tel_No = 065045434334;
        $staff->date_Of_Employment = '2017-03-29 12:01:38';
        $staff->application_Number = 70;
        $login = new Logins();
        $login->password = $request->password;
        $login->username = $request->username;*/



    }
}
