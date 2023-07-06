<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    //
    public function create($id)
    {
        return view('users.appointments.create', compact('id'));
    }
    
        public function store(Request $request, $id) {
            $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'phonenumber' => 'required',
            'description' => 'required'
            ]);
    
            $appointment = new Appointment();
            $appointment->appointment_date = $request->date;
            $appointment->appointment_time = $request->time;
            $appointment->phonenumber = $request->phonenumber;
            $appointment->description = $request->description;
            $appointment->user_id = auth()->id();
            $appointment->doctor_id = $id;
            $appointment->save();
    
            return redirect()->back()->with('success', 'Appointment created successfully.');
        }

    public function view()
    {
        $user = Auth::user();
        $appointments = $user->appointments;
        return view('users.appointments.view', ['appointments' => $appointments]);
    }

    public function appointmentDetail($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('users.appointments.appointment_detail', ['appointment' => $appointment]);
    }


}
