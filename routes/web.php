<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Doctors\AppointmentsController;
use App\Http\Controllers\Doctors\DoctorController;
use App\Http\Controllers\Doctors\PatientsController;
use App\Http\Controllers\Doctors\ProfileController;
use App\Http\Controllers\SearchController;
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

Route::match(['get', 'post'], '/', function () {
    return view('/components/auth/login');
})->name('user.login');


Route::get('/users/doctors', [DoctorsController::class, 'index']);
Route::get('/users/doctors/{id}', [DoctorsController::class, 'show']);

Route::get('/welcome', [AppointmentController::class, 'viewWelcome'])->name('dashboard');
Route::get('/users/appointments/create/{id}', [AppointmentController::class, 'create'])->name('appointmentCreate');
Route::get('/users/appointments/view', [AppointmentController::class, 'view']);
Route::get('/users/appointments/appointment_detail/{id}', [AppointmentController::class, 'appointmentDetail'])->name('appointment_detail');
Route::get('/users/profile/show', [UsersController::class, 'show']);
Route::get('/components/auth/login', [AuthController::class, 'view'])->name('Userlogin');
Route::post('/components/auth/login', [AuthController::class, 'authenticate'])->name('user.login');
Route::get('/components/auth/register', [AuthController::class, 'viewRegister']);
Route::post('/components/auth/register', [AuthController::class, 'store']);
Route::get('/components/suggestions', [DoctorController::class, 'bestDoctor']);
Route::post('/userlogout', [AuthController::class, 'destroy'])->name('user.logout');
Route::post('/users/appointments/create/{id}', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/users/appointments/search', [SearchController::class, 'search'])->name('search');

// DOCTORS APP
Route::get('/doctors', [DoctorController::class, 'index'])->middleware('auth:doctor')->name('Doctors.dashboard');
Route::get('/doctors/appointments/view', [AppointmentsController::class, 'index']);

Route::get('/doctors/appointments/{appointment}', [AppointmentsController::class, 'show']);
Route::post('/doctors/appointments/{appointment}', [AppointmentsController::class, 'action']);
Route::post('/doctors/appointments/{appointment}/reschedule', [AppointmentsController::class, 'reschedule'])->name('reschedule');
Route::get('/doctors/appointments/patients', [PatientsController::class, 'index']);
Route::get('/doctors/profile', [ProfileController::class, 'show']);
Route::get('/doctors/profile/edit', [ProfileController::class, 'edit']);
Route::get('/doctors/login', [DoctorController::class, 'showLogin'])->name('login');
Route::post('/doctors/login', [DoctorController::class, 'login'])->name('Doctors.login');
Route::post('/logout', [DoctorController::class, 'logout'])->name('logout');
