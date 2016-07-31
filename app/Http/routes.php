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

// Route::post('create', 'PolicyController@create');

// Route::delete('policies/{policy}', 'PolicyController@delete');

testing github







Route::get('insert', function () {


    $policy = new App\Policy();

    $policy->name = "harshil";
    $policy->premium = 9999;
    $policy->save();

});
