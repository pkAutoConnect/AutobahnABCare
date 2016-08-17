<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPolicyRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\App;

use App\Http\Controllers\Controller;
//use Symfony\Component\HttpFoundation\Session\Session;
use \App\Policy;
use Session;

class PolicyController extends Controller
{
    //

    public function index()
    {
        $cards = Policy::latest('created_at')->get();
        return view('policy.index', compact('cards'));
    }

    public function show(Policy $policies)
    {
        return view('policy.show', compact('policies'));
    }

    public function create()
    {
        return view('policy.create');
    }

    public function store(AddPolicyRequest $request)
    {
        $policy = new Policy;
        $policy->name = $request->name;
        $policy->premium = $request->premium;
        $policy->save();

        Session::flash('message', 'Successfully created the policy!');
        return redirect('policies');
    }

    public function edit($id)
    {
        $policies = Policy::findOrFail($id);
        return view('policy.edit', compact('policies'));
    }

    public function update($id, AddPolicyRequest $request)
    {
        $policy = Policy::findOrFail($id);
        $policy->update($request->all());

        Session::flash('message', 'Successfully updated the policy!');
        return redirect('policies');
    }


    public function destroy($id)
    {

        $policy = Policy::findOrFail($id);
        $policy->delete();

        Session::flash('message', 'Successfully deleted the policy!');
        return redirect('policies');
    }

}

//TODO PK-Error handling in case policy is not found
//TODO PK-use sweetupdates.js for session flashing