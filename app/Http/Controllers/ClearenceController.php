<?php

namespace App\Http\Controllers;

use App\Models\Clearence;
use Illuminate\Http\Request;
use App\Http\Requests\ClearenceRequest;

class ClearenceController extends Controller
{

    public function index(){
        $clearences = Clearence::all();

        return response($clearences,200);
    }

    public function store(ClearenceRequest $request){

        $clearence =new Clearence();
        $clearence->staff_Id=$request->staff_Id;
        $clearence->description=$request->description;
        $clearence->quantity=$request->quantity;
        $clearence->remarks=$request->remarks;
        $clearence->save();

        return response($clearence,200);


    }


}
