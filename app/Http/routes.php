<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/


//Route::get('policies', 'PolicyController@index');
//Route::get('policies/create', 'PolicyController@create');
//Route::get('policies/{policy}', 'PolicyController@show');
//Route::post('policies','PolicyController@store');
// Route::delete('policies/{policy}', 'PolicyController@delete');

Route::resource('policies', 'PolicyController');


Route::get('/', function () {
    Session::flash('message', 'Successfully deleted the nerd!');

    return view('welcome');


});


Route::get('insert', function () {
    $policy = new App\Policy();
    $policy->name = "harshil";
    $policy->premium = 9999;
    $policy->save();
});
