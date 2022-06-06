<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function loadAppts()
    {
        $cars = Car::all();
        return view('appointments')->with('cars', $cars);
    }

    public function submitAppt(Request $request)
    {
        request()->validate([
            'type' => 'required|not_in:0',
            'date' => 'required',
        ]);

        $sdate = request('date');
        $type = request('type');

        if ($sdate < date("Y-m-d")) {
            return redirect('/addappointment')->with('errormsg', 'Error, date must start from today and afterwards.');
        } else {
            $appt = new Appointment();
            $appt->date = $sdate;
            $appt->car_type = $type;
            $appt->used = 0;

            if ($appt->save()) {
                return redirect('/addappointment')->with('addmessage', 'Appointment added.');
            } else {
                return redirect('/addappointment')->with('addmessage', 'Error adding appointment.');
            }
        }
    }

    public function viewAppts()
    {
        $appts = DB::table('appointments')
            ->join('cars', 'cars.id', '=', 'appointments.car_type')
            ->select('appointments.id', 'appointments.date', 'appointments.used', 'cars.type', 'appointments.car_type')
            ->get();
        $cars = Car::all();
        return view('viewappointments')->with('appts', $appts)->with('cars', $cars);
    }

    public function deleteAppt(Request $request)
    {
        $appt = Appointment::find(request('apptID'));
        if ($appt->delete()) {
            return redirect('/viewappointments')->with('deletemsg', 'Appointment deleted.');
        } else {
            return redirect('/viewappointments')->with('deletemsg', 'Error deleting appointment.');
        }
    }

    public function editAppt(Request $request)
    {
        request()->validate([
            'type' => 'required|not_in:0',
            'date' => 'required',
        ]);

        $sdate = request('date');

        if ($sdate < date("Y-m-d")) {
            return redirect('/viewappointments')->with('errormsg', 'Error, date must start from today and afterwards.');
        }
        else {
            $appt = Appointment::find(request('apptID'));
            $appt->date = request('date');
            $appt->car_type = request('type');

            if ($appt->save()) {
                return redirect('/viewappointments')->with('updatemsg', 'Appointment edited.');
            } else {
                return redirect('/viewappointments')->with('updatemsg', 'Error editing appointment.');
            }
        }
    }


    public function loadAppointments()
    {
        $cid = request('cid');
        $appts = DB::table('appointments')
            ->join('cars', 'cars.id', '=', 'appointments.car_type')
            ->select('appointments.id', 'appointments.date', 'cars.price')
            ->where('appointments.car_type', '=', $cid)
            ->where('appointments.used', '=', '0')
            ->get();
        return response()->json(array('appts' => $appts), 200);
    }
}
