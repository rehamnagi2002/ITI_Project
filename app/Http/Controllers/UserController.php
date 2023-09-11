<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function start()
    {
        return view('user.start');
    }
    function create()
    {
        return view('user.login');
    }
    function store(Request $request)
    {
        $check = $request->all();
        // dd($check);
        ////////////////////////////////////database        //from form
        if (Auth::guard('web')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('user.index');
        }
        return back()->with('error', 'Invalid email or password');

    }
    function createregister()
    {
        return view('user.register');
    }

    function storeregister(Request $request)
    {
        // dd($request->all());
        User::create($request->all());
        return redirect()->route('user.index');
    }
    function index()
    {
        return view('user.index');
    }
    function show($id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
}