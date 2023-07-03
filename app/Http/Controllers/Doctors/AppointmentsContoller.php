<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsContoller extends Controller
{
    //
    public function index(){
        return view("doctors.appointments");
    }

    public function show($id){
        return view("doctors.appointments.show");
    }
}
