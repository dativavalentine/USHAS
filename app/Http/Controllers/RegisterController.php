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
        $staff = new StaffDetails();
        $staff->staff_Id = $request->staff_Id;
        $staff->first_name = $request->first_name;
        $staff->middle_name = $request->middle_name;
        $staff->last_name = $request->last_name;
        $staff->designation = $request->designation;
        $staff->admin_Post = $request->admin_Post;
        $staff->tel_No = $request->tel_No;
        $staff->date_Of_Employment = $request->date_Of_Employment;
        $staff->application_Number = $request->application_Number;
        $staff->department()->associate($request->department_Id);
        $staff->save();

        $login = new Logins();
        $login->password = $request->last_name;
        $login->username = $request->staff_Id;
        $login->staff()->associate($staff->id);
        $login->save();

        return response($staff,200);
    }
}
