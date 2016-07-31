<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Http\Controllers\Controller;

use \App\Policy;

class PolicyController extends Controller
{
    //

    public function index()
    {

        $cards = Policy::all();

    return view('policy.index', compact('cards'));



    }

    public function show(Policy $policy)
    {

return view ('policy.show', compact('policy'));

    }
}
