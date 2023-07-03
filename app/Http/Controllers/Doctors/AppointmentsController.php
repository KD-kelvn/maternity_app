<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    //
    public function index(){
        return view("doctors.appointments.index");
    }

    public function show($id){
        return view("doctors.appointments.show");
    }
}
