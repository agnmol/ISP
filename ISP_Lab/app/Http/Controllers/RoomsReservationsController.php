<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsReservationsController extends Controller
{
    public function index()
    {
        return view('reservations');
    }
}