<?php

use Illuminate\Http\Request;
//use app\Http\Requests\StoreStaffRequest;

Route::get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login','LoginController@login');

//->middleware('auth:api');