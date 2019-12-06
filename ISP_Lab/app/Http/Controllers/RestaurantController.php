<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('menu');
    }

    public function add()
    {
        return view('addToMenu');
    }

    public function reserveTable()
    {
        return view('tableReservation');
    }
}
