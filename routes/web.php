<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Doctors\AppointmentsController;
use App\Http\Controllers\Doctors\PatientsController;
use App\Http\Controllers\Doctors\ProfileController;
use App\Http\Controllers\Users\DoctorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/doctors', [DoctorsController::class, 'index']);
Route::get('/users/doctors/{id}', [DoctorsController::class, 'show']);

Route::get('/users/appointments/create', [AppointmentController::class, 'create']);
Route::get('/users/appointments/view', [AppointmentController::class, 'view']);
Route::get('/users/appointments/appointment_detail', [AppointmentController::class, 'appointmentDetail']);

// DOCTORS APP
Route::get("/doctors", function(){
    return view("doctors.dashboard");
});
Route::get('/doctors/appointments/view', [AppointmentsController::class, 'index']);
Route::get('/doctors/appointments/{id}', [AppointmentsController::class, 'show']);
Route::get('/doctors/appointments/patients', [PatientsController::class, 'index']);
Route::get('/doctors/profile', [ProfileController::class, 'show']);