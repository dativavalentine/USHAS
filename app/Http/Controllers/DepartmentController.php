<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller

{

    public function index(){
        $departments = Department::all();

        return response($departments,200);
    }
    //add the method required to post the data
    public function store(DepartmentRequest $request){

        $departments = new Department();
        $departments->id = $request->id;
        $departments->name = $request->name;
        $departments->head_Of_Department = $request->head_Of_Department;
       // $departments->staff()->associate($request->staff_Id);
        $departments->college_Id = $request->college_Id;



        return response($departments,200);

    }
}
