<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function create()
    {
        return view('admin.login');
    }
    function store(Request $request)
    {
        $check = $request->all();
        // dd($check);
        ////////////////////////////////////database        //from form
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.index');
        }
        return back()->with('error', 'Invalid email or password');

    }
    function createregister()
    {
        return view('admin.register');
    }

    function storeregister(Request $request)
    {
        // dd($request->all());
        Admin::create($request->all());
        return redirect()->route('admin.index');
    }
    function index()
    {
        return view('admin.index');
    }
}
