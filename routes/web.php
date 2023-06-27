<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

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


Route::get('/users/appointments/create', [AppointmentController::class, 'create']);
Route::get('/users/appointments/view', [AppointmentController::class, 'view']);
Route::get('/users/appointments/appointment_detail', [AppointmentController::class, 'appointmentDetail']);
