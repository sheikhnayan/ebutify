<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder($value='')
    {
        return view('user_services.place-order');
    }

    public function placeCustomOrder($value='')
    {
        return view('user_services.place-custom-order');
    }

    public function placeCustomOrderStep2($value='')
    {
        return view('user_services.place-order-step2');
    }
}
