<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function CustomerSubscriptions()
    {
        return view('user.customer-subscriptions-billing');
    }
}
