<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoomsReservationsController extends Controller
{
    public function index()
    {
        return view('userRoomsReservations');
    }
}
