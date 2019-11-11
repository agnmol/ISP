<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookedServicesController extends Controller
{
    public function index()
    {
        return view('bookedServices');
    }
}
