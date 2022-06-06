<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\WashController;
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

Route::get('/addappointment', [AppointmentController::class, 'loadAppts'])->middleware('auth');
Route::post('/addappointment', [AppointmentController::class, 'submitAppt']);

Route::get('/viewappointments', [AppointmentController::class, 'viewAppts'])->middleware('auth');

Route::get('/admin', [UserController::class, 'loadAdmin'])->middleware('auth');

Route::post('/deleteappointment', [AppointmentController::class, 'deleteAppt']);
Route::post('/editappointment', [AppointmentController::class, 'editAppt']);

Route::get('/reserve', [ReserveController::class, 'loadReservationPage'])->middleware('auth');
Route::post('/reserve', [ReserveController::class, 'submitReservation']);
Route::get('/getappointments', [AppointmentController::class, 'loadAppointments'])->middleware('auth');

Route::get('/viewreservations', [ReserveController::class, 'loadReservations'])->middleware('auth');
Route::post('/deletereservation', [ReserveController::class, 'deleteReservation']);
Route::post('/printbill', [ReserveController::class, 'printAdminBill']);

Route::get('/getwashprice', [WashController::class, 'getWashPrice'])->middleware('auth');
Route::get('/washtypes', [WashController::class, 'loadWashTypes'])->middleware('auth');
Route::get('/addwash', [WashController::class, 'loadAddWash'])->middleware('auth');
Route::post('/addwash', [WashController::class, 'submitAddType']);
Route::post('/deletewashtype', [WashController::class, 'deleteWashType']);
Route::post('/editwashtype', [WashController::class, 'editWashType']);

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::get('/services', function(){
    return view('services');
});
