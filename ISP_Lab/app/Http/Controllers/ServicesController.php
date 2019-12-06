<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function add()
    {
        return view('addService');
    }

    public function group2()
    {
        return view('servicesgroup2');
    }

    public function group()
    {
        return view('servicesgroup');
    }


}
