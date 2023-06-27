<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function create()
    {
        return view('users.appointments.create');
    }

    public function view()
    {
        return view('users.appointments.view');
    }

    public function appointmentDetail()
    {
        return view('users.appointments.appointment_detail');
    }

}
