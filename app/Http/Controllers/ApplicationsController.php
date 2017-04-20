<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationsRequest;

class ApplicationsController extends Controller
{


       public function index(){$application = Application::all();

           return response($application,200);
       }


       public function store(ApplicationsRequest $request){

           $application =new Application();
           $application->apply_Date = $request->apply_Date;
           $application->staff_id = $request->staff_id;
           $application->application_Type = $request->application_Type;
           $application->application_Type = $request->approved_By_Housing_Officer;
           $application->approved_By_Housing_Officer = $request->approved_By_Officer;
           $application->confirmation = $request->confirmation;
           $application->staff()->associates($request->staff_Id);
           $application->save();

           return response($application,200);
           
       }

}
