<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
        return view('users.index');
    }

    public function show()
    {
        return view('users.profile.show');
    }

    public function edit()
    {
        return view('users.profile.edit');
    }

    
    
}
