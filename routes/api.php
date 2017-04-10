<?php

use Illuminate\Http\Request;
//use app\Http\Requests\StoreStaffRequest;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register','RegisterController@register');
Route::post('/login','LoginController@login');

//Route za kupata data za house
Route::post('/house', 'HouseController@store');
Route::get('/house','HouseController@index');

//Route za apllication
Route::post('/application','ApplicationController@store');
Route::get('/application', 'ApplicationController@index');

//Route za clearence
Route::post('/clearence','ClearenceController@clearence');
Route::get('/clearence', 'ClearenceController@clearence');

//Applications routes
Route::post('/applications','ApplicationsController@applications');
Route::get('applications','ApplicationsController@applications');

Route::post('departments','DepartmentController@departments');
Route::get('departments','DepartmentController@departments');
