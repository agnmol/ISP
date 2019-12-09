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

    public function showService($id)
    {
        return view('serviceItem')->with('groupId', $id);
    }

    public function removeService($id)
    {
        return view('removeServiceItem')->with('serviceItemId', $id);
    }

    public function editService($id)
    {
        return view('editServiceItem')->with('serviceItemId', $id);
    }

    public function booked()
    {
        return view('bookedServices');
    }

    public function orderService($id)
    {
        return view('orderServiceItem')->with('serviceItemId', $id);
    }

   /* public function group2()
    {
        return view('servicesgroup2');
    }

    public function group()
    {
        return view('servicesgroup');
    }*/


}
