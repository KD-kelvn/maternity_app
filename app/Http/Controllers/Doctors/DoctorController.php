<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index()
    {
        return view('doctors.dashboard');
    }

    public function login(){
        return view('doctors.login');
    }
    public function auth(){
        return view('doctors.auth');
    }

    public function profileShow(){
        return view('doctors.profile.show');
    }
    public function profileEdit(){
        return view('doctors.profile.edit');
    }
}
