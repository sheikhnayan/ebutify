<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductDetail;

class FreelancerController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {   

        //  IF USER'S REGISTERED
    	if(Auth::check()){

            //  IF USER TYPE MATCHES
    		if(Auth::user()->user_type == "user"){
                $user_id = auth()->id();
                //  IF USER'S NOT SUBSCRIBED
                if(!Auth::user()->subscribed('main')){

                    //  FETCH AVAILABLE PLANS
                    $availablePlans = [ 'price_1If8QdEgl2c23BzjE4HCoJc3' => 'Monthly',
                    'price_1If8VPEgl2c23Bzjq8LUvao7' => 'Yearly',
                    
                    ];

                    //  FETCH SUBSCRIPTION REQUIRED DATA
                    $data = [
                        'intent' => Auth::user()->createSetupIntent(),
                        'plans' => $availablePlans
                    ];

                    //  VIEW PAYMENT PAGE WITH DATA
                    return view('payment')->with($data);
    		
		        }else{

                    //  SHOW DASHBOARD IF SUBSCRIBED

                    $products = ProductDetail::all();

                    return view('user.customer-dashboard',compact('products'));
                    }

            }elseif (Auth::user()->user_type == "freelancer") {

                $user_id = auth()->id();
                $products = ProductDetail::where('user_id', $user_id)->get();
                $productAdded = count($products);
                return view('freelancer.freelancer-dashboard', compact('productAdded'));
            }elseif(Auth::user()->user_type == "admin"){

                $user_id = auth()->id();
                $products = ProductDetail::where('user_id', $user_id)->get();
                $productAdded = count($products);
                return view('admin.index', compact('productAdded'));
            }

        }
    }

    public function subscribe(Request $request)
    {

        $paymentMethod = $request->payment_method;

        $planId = $request->plan;

        Auth()->user()->newSubscription('main', $planId)->create($paymentMethod);

        return response([
            'success_url'=> redirect()->intended('/dashboard')->getTargetUrl(),
            'message'=>'success'
        ]);
    }

    public function logoutFreelancer(Request $request)
	{
	    Auth::logout();

	    $request->session()->invalidate();

	    $request->session()->regenerateToken();

	    return view('auth.login');
	}

    public function workReportFreelancer()
    {

        return view('freelancer.work-report');
    }

    public function message()
    {

        return view('freelancer.message');
    }

    
    public function profile($id)
    {
        $data = User::where('id', $id)->first();
        return view('freelancer.profile',compact('data'));
    }

    public function updatePassword(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([

        'name' => 'required|unique:user,name|max:255',
        'cost' => 'required',
        'profit' => 'required',
        'torder' => 'required',
        'trevinue' => 'required',
        'alexarank' => 'required',
        'opportunity' => 'required',
        'tag' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'category' => 'required',
        'country' => 'required',
        'desc' => 'required',
        'video'=> 'required',

        ]);

    }

}
