<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableReservationController extends Controller
{
    public function index()
    {
        return view('tableReservation');
    }
}
