<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = \App\Customers::with('person')->get();
        return view('layouts.customers', compact('customers'));
    }
    public function edit($id){
        $customer = \App\Customers::find($id)->first();
        if($customer->nepageidaujamas == 0){
            $customer->nepageidaujamas = 1;
        }
        else{
            $customer->nepageidaujamas = 0;
        }
            $customer->save();
        return redirect()->back()->with('success', 'Darbuotojo statusas pakeistas');
    }
}
