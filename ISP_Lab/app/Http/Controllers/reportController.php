<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function restaurant()
    {
        return view('restaurantReport');
    }

    public function services()
    {
        return view('servicesReport');
    }

    public function reservations()
    {
        return view('reservationsReport');
    }
}
