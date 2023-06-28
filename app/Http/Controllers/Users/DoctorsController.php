<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function index()
    {
        return view('users.doctors.index');
    }

    public function show($id)
    {
        return view('users.doctors.show');
    }
}
