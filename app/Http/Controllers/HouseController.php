<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseRequest;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{



    public function index(){
        $houses = House::all();

        return response($houses,200);
    }

    public function store(StoreHouseRequest $request){

        $house =new House();
        $house->house_Category = $request->house_Category;
        $house->no_Of_Bedrooms = $request->no_Of_Bedrooms;
        $house->house_number = $request->house_number;
        $house->location = $request->location;
        $house->staff()->associate($request->staff_Id);
        $house->save();

        return response($house,200);


    }
}
