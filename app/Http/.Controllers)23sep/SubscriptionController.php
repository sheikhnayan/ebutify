<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductDetail;
use App\Models\QuickStart;
use App\Models\Cashier\Subscription;
use Redirect;


class SubscriptionController extends Controller
{
    public function CustomerSubscriptions()
    {
        return view('user.customer-subscriptions-billing');
    }

    public function CancelSubscription(Request $request)
    {
        if (Auth::user()->subscribed('main')) {
                Auth::user()->subscription('main')->cancel();
                echo "Hello Fucker";
        }
        return Redirect::back()->withErrors(['msg', 'The Message']);
    }
}
