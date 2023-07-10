<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show(){
        // get the doctor's profile and omit the password, created_At and updated_at fields
        $doctor = auth()->guard('doctor')->user();
        
        return view("doctors.profile.show", [
            'doctor' => $doctor
        ]);
    }
    public function edit(){
        return view("doctors.profile.edit");
    }
}
