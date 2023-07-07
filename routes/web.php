<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Doctors\AppointmentsController;
use App\Http\Controllers\Doctors\DoctorController;
use App\Http\Controllers\Doctors\PatientsController;
use App\Http\Controllers\Doctors\ProfileController;
use App\Http\Controllers\Users\AuthController;
use App\Http\Controllers\Users\DoctorsController;
use App\Http\Controllers\Users\UsersController;

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

Route::get('/users/appointments/create/{id}', [AppointmentController::class, 'create'])->name('dashboard');
Route::get('/users/appointments/view', [AppointmentController::class, 'view']);
Route::get('/users/appointments/appointment_detail/{id}', [AppointmentController::class, 'appointmentDetail'])->name('appointment_detail');
Route::get('/users/profile/show', [UsersController::class, 'show']);
Route::get('/components/auth/login', [AuthController::class, 'view'])->name('login');
Route::post('/components/auth/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/components/auth/register', [AuthController::class, 'viewRegister']);
Route::post('/components/auth/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
Route::post('/users/appointments/create/{id}', [AppointmentController::class, 'store'])->name('appointments.store');



// DOCTORS APP
Route::get('/doctors', [DoctorController::class, 'index'])->middleware('auth');
Route::get('/doctors/appointments/view', [AppointmentsController::class, 'index']);
Route::get('/doctors/appointments/{id}', [AppointmentsController::class, 'show']);
Route::get('/doctors/appointments/patients', [PatientsController::class, 'index']);
Route::get('/doctors/profile', [ProfileController::class, 'show']);
Route::get('/doctors/profile/edit', [ProfileController::class, 'edit']);
Route::get('/login', [DoctorController::class, 'showLogin'])->name('login');
Route::post('/doctors/login', [DoctorController::class, 'login'])->name('login');
Route::post('/logout', [DoctorController::class, 'logout'])->name('logout');


