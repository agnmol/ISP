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

    public function groupMenu($id){
        return view('menu')->with('groupId', $id);
    }

    public function rateMenuItem($id){
        return view('rateMenuItem')->with('menuItemId', $id);
    }


    public function editMenuItem($id){
        return view('editMenuItem')->with('menuItemId', $id);
    }

    public function removeMenuItem($id){
        return view('removeMenuItem')->with('menuItemId', $id);
    }

}
