<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::get('policies', 'PolicyController@index');

Route::get('policies/{policy}', 'PolicyController@show');











Route::get('insert', function () {


    $policy = new App\Policy();

    $policy->name = "harshil";
    $policy->premium = 9999;
    $policy->save();

});
