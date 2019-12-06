<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('allJobs');
    }

    public function add()
    {
        return view('addJob');
    }
}
