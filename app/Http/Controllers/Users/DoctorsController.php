<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::all();
        return view('users.doctors.index', compact('doctors'));
    }
    

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('users.doctors.show', ['doctor' => $doctor]);
    }

   // Update the existing method
    public function bestDoctor()
    {
        $doctors = Doctor::withCount('appointments')
            ->orderByDesc('appointments_count')
            ->whereHas('appointments')
            ->get();

        return view('components.suggestions', ['doctors' => $doctors]);
    }

}
