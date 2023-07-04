<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::all();
        return view('users.doctors.index', compact('doctors'));
    }
    

    public function show($id)
    {
        return view('users.doctors.show');
    }
}
