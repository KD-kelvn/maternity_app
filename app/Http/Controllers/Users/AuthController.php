<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function view()
    {
        return view('components.auth.login');
    }

    public function viewRegister()
    {
        return view('components.auth.register');
    }
}
