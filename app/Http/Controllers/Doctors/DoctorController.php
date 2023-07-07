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
        return view('doctors.dashboard');
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
            return redirect()->route('/doctors');
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
        return redirect()->route('doctors.login');
    }
}
