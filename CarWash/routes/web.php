<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ReserveController;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'loadHome']);
Route::post('/printinvoice', [ReserveController::class, 'printInvoice']);

Route::get('/login', [UserController::class, 'loadLogin'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/signup', [UserController::class, 'loadSignup'])->middleware('guest');
Route::post('/signup', [UserController::class, 'submitUser']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/addappointment', [AppointmentController::class, 'loadAppts']);
Route::post('/addappointment', [AppointmentController::class, 'submitAppt']);

Route::get('/viewappointments', [AppointmentController::class, 'viewAppts']);

Route::get('/admin', [UserController::class, 'loadAdmin']);

Route::post('/deleteappointment', [AppointmentController::class, 'deleteAppt']);
Route::post('/editappointment', [AppointmentController::class, 'editAppt']);

Route::get('/reserve', [ReserveController::class, 'loadReservationPage']);
Route::post('/reserve', [ReserveController::class, 'submitReservation']);
Route::get('/getappointments', [AppointmentController::class, 'loadAppointments']);

Route::get('/viewreservations', [ReserveController::class, 'loadReservations']);
Route::post('/deletereservation', [ReserveController::class, 'deleteReservation']);
Route::post('/printbill', [ReserveController::class, 'printAdminBill']);

