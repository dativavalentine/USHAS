<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Models\StaffDetails;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(StoreStaffRequest $request){

        $staff = StaffDetails::where('staff_Id','=',$request->id)->get();

        return $staff;
    }
}
