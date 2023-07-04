<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show(){
        return view("doctors.profile.show");
    }
    public function edit(){
        return view("doctors.profile.edit");
    }
}
