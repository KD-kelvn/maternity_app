<?php

namespace App\Http\Controllers\Doctors;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    //
    public function index(Request $request)
    {
        $doctor = Auth::guard('doctor')->user();
    
        // Load appointments with patients using eager loading
        $appointments = $doctor->appointments()->with('user')->when($request->input('date'),function($query) use ($request){
            $query->where('appointment_date', $request->date);
        })->get();
    
        // Map appointment_date to date for easier access
        $appointments->each(function ($appointment) {
            $appointment->date = $appointment->appointment_date;
        });
    
        // Output the appointments for debugging purposes
    
        return view("doctors.appointments.index", compact('appointments'));
    }
    

    public function show(Appointment $appointment){
        $doctor = Auth::guard('doctor')->user();
        // patient is loaded using eager loading
        $appointment->load('user');
        return view("doctors.appointments.show", compact('appointment', 'doctor'));
    }
    public function action(Appointment $appointment, Request $request){
   
        if($request->has('accept')){
            $appointment->update([
                'status' => 'accepted'
            ]);
            return redirect()->back()->with('message', 'Appointment accepted');
        }
        else if($request->has('pending')){
            $appointment->update([
                'status' => 'pending'
            ]);
            return redirect()->back()->with('message', 'Appointment pending');
        }
        else{
            $appointment->update([
                'status' => 'rejected'
            ]);
            return redirect()->back()->with('message', 'Appointment rejected');
        }
    }
    public function reschedule(Appointment $appointment, Request $request){
        $appointment->update([
            'appointment_date' => $request->date,
            'appointment_time' => $request->time,
            'location' => $request->location,
            'status' => 'accepted'
        ]);
        return redirect()->back()->with('message', 'Appointment rescheduled');
    }

}
