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
        $cards = Policy::latest('created_at')->get();
        return view('policy.index', compact('cards'));
    }

    public function show(Policy $policy)
    {
        return view('policy.show', compact('policy'));
    }

    public function create()
    {
        return view('policy.create');
    }

    public function store(Requests\AddPolicyRequest $request)
    {
        $policy = new Policy;
        $policy->name = $request->name;
        $policy->premium = $request->premium;
        $policy->save();

        return redirect('policies');
    }

}
