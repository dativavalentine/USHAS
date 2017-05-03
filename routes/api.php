<?php

use Illuminate\Http\Request;
//use app\Http\Requests\StoreStaffRequest;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register','RegisterController@register');
Route::post('/login','LoginController@login');
Route::get('/login','LoginController@index');

//Route za kupata data za house
Route::post('/house', 'HouseController@store');
Route::get('/house','HouseController@index');

//Route za apllication
Route::post('/application','ApplicationController@store');
Route::get('/application', 'ApplicationController@index');
//Route::get('/{application}', 'ApplicationController@show');

//Route za clearence
Route::post('/clearence','ClearenceController@store');
Route::get('/clearence', 'ClearenceController@index');

//Applications routes
Route::post('/applications','ApplicationsController@store');
Route::get('applications','ApplicationsController@index');

//Route za department
Route::post('departments','DepartmentController@store');
Route::get('departments','DepartmentController@index');
