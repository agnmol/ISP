<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservationsReportController extends Controller
{
    public function index()
    {
        return view('reservationsReport');
    }
}
