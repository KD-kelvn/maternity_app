<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    //
    public function viewWelcome() {
        $doctors = Doctor::all();
        return view('welcome', compact('doctors'));
    }

    public function create($id)
    {
        return view('users.appointments.create', compact('id'));
    }
    
    public function store(Request $request, $id)
{
    $request->validate([
        'date' => 'required|date',
        'time' => 'required',
        'phonenumber' => 'required',
        'description' => 'required',
        'paymentmethod' => 'required',
    ]);

    $appointmentDateTime = $request->date . ' ' . $request->time;
    
    // Check if there is any appointment with the same date and time
    $conflictingAppointment = Appointment::where('appointment_date', $request->date)
        ->where('appointment_time', $request->time)
        ->exists();

    if ($conflictingAppointment) {
        return redirect()->back()->withErrors(['time' => 'This appointment time is already taken. Please choose a different time.']);
    }

    $appointment = new Appointment();
    $appointment->appointment_date = $request->date;
    $appointment->appointment_time = $request->time;
    $appointment->phonenumber = $request->phonenumber;
    $appointment->description = $request->description;
    $appointment->paymentmethod = $request->paymentmethod;
    $appointment->status = 'pending'; // Set the default status as "pending"
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
