<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
