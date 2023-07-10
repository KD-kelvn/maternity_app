<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    //
    public function index()
    {
        // get all total  appointments
        $appointments = Auth::guard('doctor')->user()->appointments()->get();
        $allAppointments = $appointments->count();
        // count total number of appointments whose created at is less than 12 hours ago
        $todaysAppointments = $appointments->filter(function ($appointment) {
            return $appointment->created_at->gt(now()->subHours(12));
        });
        // count total number of user id in appointments
        $patients = $appointments->pluck('user_id')->unique();
        $patientsTotal = $patients->count();

        
        $newAppointments = $todaysAppointments->count();
        return view('doctors.dashboard', [
            'appointments' => $appointments,
            'totalAppointments' => $newAppointments,
            'totalPatients' => $patientsTotal,
            'allAppointments' => $allAppointments,
        ]);
    }
    public function showLogin()
    {
        return view('doctors.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the doctor
        if (Auth::guard('doctor')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            // Redirect to a doctor-specific page
            return redirect()->route('Doctors.dashboard');
        }

        // Invalid credentials
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function profileShow(){
        return view('doctors.profile.show');
    }
    public function profileEdit(){
        return view('doctors.profile.edit');
    }

    public function logout()
    {
        Auth::guard('doctor')->logout();
    
        // Regenerate session ID to prevent session fixation attacks
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    
        // Add a flash message to notify the user
        session()->flash('success', 'You have been logged out successfully.');
    
        return redirect()->route('login');
    }
    
}
