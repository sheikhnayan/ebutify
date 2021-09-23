<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function serviceDashboard(Request $request)
    {
        return view('user_services.customer-ebutify-services-dashboard');
    }

    public function ebutifyServices()
    {
        return view('user_services.customer-ebutify-services');
    }

    public function allProjects()
    {
        return view('user_services.customer-my-services');
    }

    public function viewServices()
    {
        return view('user_services.customer-ebutify-view-services');
    }

    public function allProjectsDetails()
    {
        return view('user_services.customer-my-services-details');
    }
}
