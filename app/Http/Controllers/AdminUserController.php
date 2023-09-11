<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function index()
    {
        $adminUsers = User::get();
        return view('adminUser.index', compact('adminUsers'));
    }
    function show($id)
    {
        $adminUser = User::find($id);
        return view('adminUser.show', compact('adminUser'));

    }
}
