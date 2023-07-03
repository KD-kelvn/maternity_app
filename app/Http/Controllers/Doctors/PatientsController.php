<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    //
    public function index(){
        return view("doctors.patients");
    }
    public function show($id){
        return view("doctors.patients.show");
    }
}
