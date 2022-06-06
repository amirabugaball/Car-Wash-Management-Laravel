<?php

namespace App\Http\Controllers;

use App\Models\Wash;
use Illuminate\Http\Request;

class WashController extends Controller
{
    public function getWashPrice(Request $request)
    {
        $wid = request('wid');
        $wash = Wash::find($wid);
        return $wash->price;
    }

    public function loadAddWash()
    {
        return view('addwash');
    }

    public function loadWashTypes()
    {
        $washes = Wash::all();
        return view('washes')->with('washes', $washes);
    }

    public function submitAddType(Request $request)
    {
        request()->validate([
            'type' => 'required|not_in:0',
            'price' => 'required|integer|gt:0',
        ]);
        $wash = new Wash();
        $wash->type = request('type');
        $wash->price = request('price');

        if($wash->save()){
            return redirect('/washtypes')->with('addmessage', 'Wash type added successfully.');
        }
        else {
            return redirect('/washtypes')->with('addmessage', 'Error adding wash type.');
        }
    }

    public function deleteWashType(){
        $washType = Wash::find(request('washID'));
        if ($washType->delete()) {
            return redirect('/washtypes')->with('deletemsg', 'Wash Type deleted.');
        } else {
            return redirect('/washtypes')->with('deletemsg', 'Error Deleting Wash Type.');
        }
    }

    public function editWashType(){
        request()->validate([
            'wash_type' => 'required|not_in:0',
            'wash_price' => 'required|integer|gt:0',
        ]);

        $washT = Wash::find(request('washID'));
        $washT->type = request('wash_type');
        $washT->price = request('wash_price');

        if ($washT->save()) {
            return redirect('/washtypes')->with('updatemsg', 'Wash Type edited.');
        } else {
            return redirect('/washtypes')->with('updatemsg', 'Error Updating Wash Type.');
        }
    }
}
