<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeRoomsController extends Controller
{
    public function index()
    {
        return view('freeRooms');
    }
}
