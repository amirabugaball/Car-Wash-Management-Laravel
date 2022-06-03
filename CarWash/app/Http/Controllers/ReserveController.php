<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Car;
use App\Models\Reserve;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ReserveController extends Controller
{
    public function loadReservationPage()
    {
        $cars = Car::all();
        return view('reserve')->with('cars', $cars);
    }

    public function submitReservation(Request $request)
    {
        $reservation = new Reserve();
        $reservation->user_id = Auth::user()->id;
        $reservation->car_type = request('type');
        $reservation->date = request('date');
        $reservation->price = request('price');
        $appt = Appointment::find(request('date'));
        $appt->used = 1;

        if ($reservation->save() && $appt->save()) {
            return redirect('/viewreservations')->with('addmsg', 'Reservation confirmed.');
        } else {
            return redirect('/viewreservations')->with('addmsg', 'Error adding reservation.');
        }
    }

    public function loadReservations()
    {
        if (Auth::user()->username != "Admin") {
            $userid = Auth::user()->id;
            $reservations = DB::table('reservations')
                ->join('cars', 'reservations.car_type', '=', 'cars.id')
                ->join('appointments', 'reservations.date', '=', 'appointments.id')
                ->select('cars.type', 'appointments.date', 'reservations.price', 'reservations.id')
                ->where('reservations.user_id', '=', $userid)
                ->orderBy('reservations.id')
                ->get();
            return view('reservations')->with('reservations', $reservations);
        } else {
            $reservations = DB::table('reservations')
                ->join('cars', 'reservations.car_type', '=', 'cars.id')
                ->join('appointments', 'reservations.date', '=', 'appointments.id')
                ->join('users', 'reservations.user_id', '=', 'users.id')
                ->select('cars.type', 'appointments.date', 'reservations.price', 'reservations.id', 'users.username')
                ->orderBy('reservations.id')
                ->get();
            return view('reservations')->with('reservations', $reservations);
        }
    }

    public function printInvoice(Request $request)
    {
        $username = Auth::user()->username;
        $invID = request('id');
        $invType = request('type');
        $invPrice = request('price');

        view()->share('username', $username);
        view()->share('invType', $invType);
        view()->share('invID', $invID);
        view()->share('invPrice', $invPrice);
        $pdf = PDF::loadView('invoice');
        return $pdf->download('invoice' . rand() . '.pdf');
    }

    public function printAdminBill(Request $request)
    {
        $reservations = DB::table('reservations')
            ->join('cars', 'reservations.car_type', '=', 'cars.id')
            ->join('appointments', 'reservations.date', '=', 'appointments.id')
            ->join('users', 'reservations.user_id', '=', 'users.id')
            ->select('cars.type', 'appointments.date', 'reservations.price', 'reservations.id', 'users.username')
            ->orderBy('reservations.id')
            ->get();
        view()->share('reservations', $reservations);
        $pdf = PDF::loadView('bill');
        return $pdf->download('bill' . rand() . '.pdf');
        //return view('bill')->with('reservations', $reservations);
    }

    public function deleteReservation(Request $request)
    {
        $rs = Reserve::find(request('reserveID'));
        if ($rs->delete()) {
            return redirect('/viewreservations')->with('deletemsg', 'Reservation deleted.');
        } else {
            return redirect('/viewreservations')->with('deletemsg', 'Error deleting reservation.');
        }
    }
}
