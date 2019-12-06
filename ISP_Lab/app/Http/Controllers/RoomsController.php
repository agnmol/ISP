<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RoomsController extends Controller
{
    public function index()
    {
        return view('rooms');
    }

    public function reservations()
    {
        $reservations = \App\RoomReservations::with('room', 'customer.person', 'room.size')->get();
        return view('reservations', compact('reservations'));
    }

    public function userReservations()
    {
        return view('userRoomsReservations');
    }

    public function freeRooms()
    {
        return view('freeRooms');
    }

    public function confirm($id){
        $reservation = \App\RoomReservations::find($id)->first();
        $reservation->patvirtinta = 1;
        $reservation->save();
        return redirect()->back()->with('success', 'Rezervacija patvirtinta');
    }

    public function confirmEditReservation(Request $request, $id)
    {

        $validator = Validator::make(
            [   'data_nuo'=>$request->input('from'),
                'data_iki' =>$request->input('to')
            ],
            [   'data_nuo' => "required|date_format:Y-m-d",
                'data_iki' => 'required|date_format:Y-m-d'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {

            $reservation = \App\RoomReservations::find($id)->first();
            $reservation->data_nuo  = $request->input('from');
            $reservation->data_iki = $request->input('to');

            $reservation->save();
        }
        return redirect()->route('roomReservations')->with('success', 'Rezervacija sėkmingai redaguota');
    }

    public function editReservation($id){
        $reservation = \App\RoomReservations::with('room', 'worker', 'customer')->where('id', $id)->first();
        return view('editReservation', compact('reservation'));
    }
}
