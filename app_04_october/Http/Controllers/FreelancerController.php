<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductDetail;
use App\Models\QuickStart;
use Stripe\Subscription;
use App\Models\Category;
use DB;
use Carbon\Carbon;

class FreelancerController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {   
        $realCategory = Category::whereNotNull('id');

        //  IF USER'S REGISTERED
        if(Auth::check()){

            //  IF USER TYPE MATCHES
            if(Auth::user()->user_type == "user"){
                $user_id = auth()->id();
                //  IF USER'S NOT SUBSCRIBED
                if(!Auth::user()->subscribed('main')){

                    //  FETCH AVAILABLE PLANS
                    $availablePlans = [ 'price_1If8VPEgl2c23Bzjq8LUvao7' => 'Monthly',
                    'price_1If8QdEgl2c23BzjE4HCoJc3' => 'Yearly',
                    
                    ];


                    //  FETCH SUBSCRIPTION REQUIRED DATA
                    $data = [
                        'intent' => Auth::user()->createSetupIntent(),
                        'plans' => $availablePlans,
                    ];
                    // dd('hello');
                    //  VIEW PAYMENT PAGE WITH DATA
                    return view('payment')->with($data);
            
                }else{

                    $plan = DB::table('subscriptions')->where('user_id', Auth::user()->id)->latest()->first();

                    // dd($plan);

                    if($plan->stripe_plan == 'price_1If8VPEgl2c23Bzjq8LUvao7'){

                        $enddate = Carbon::parse($plan->created_at)->addMonth()->format('d.m.Y');

                    }elseif($plan->stripe_plan == 'price_1If8QdEgl2c23BzjE4HCoJc3'){

                        $enddate = Carbon::parse($plan->created_at)->addYear()->format('d.m.Y');

                    }
                    if($enddate <= Carbon::now()){
                        
                        // dd('hello');
                        //  SHOW DASHBOARD IF SUBSCRIBED
                    $invoices = Auth()->user()->invoices();
                    // dd($subscriptions);

                    $subscriptions = Auth()->user()->subscription('main')->stripe_plan;
                    // dd($subscriptions);

                    $subscriptionItem = Auth()->user()->subscription('main')->items->first();
                    // dd($subscriptionItem);
                    // Retrieve the Stripe price and quantity for a specific item...
                    $cardName = Auth()->user()->card_brand;
                    $cardLastFour = Auth()->user()->card_last_four;

                    $user = Auth()->user()->created_at;
                    $stripePrice = $subscriptionItem->stripe;
                    $quantity = $subscriptionItem->quantity;

                    // dd($payment->amount(), 'Price = '.$stripePrice, 'Quantity = '.$quantity, 'Card Name = '.$cardName, 'Subsription Plan Id = '.$subscriptions, 'Card Last Four ='.$cardLastFour);

                    // dd('Price = '.$stripePrice, 'Quantity = '.$quantity, 'Card Name = '.$cardName, 'Subsription Plan Id = '.$subscriptions, 'Card Last Four ='.$cardLastFour);

                    // dd($payment->amount(), 'Price = '.$stripePrice, 'Quantity = '.$quantity, 'Card Name = '.$cardName, 'Subsription Plan Id = '.$subscriptions, 'Card Last Four ='.$cardLastFour);
                    // dd('Price = '.$stripePrice, 'Quantity = '.$quantity, 'Card Name = '.$cardName, 'Subsription Plan Id = '.$subscriptions, 'Card Last Four ='.$cardLastFour);


                    if (Auth::user()->subscribed('main')) {
                        //
                        // dd('fuck');

                        // $subscriptions = Subscription()->active()->get();
                    if(Auth::user()->status == 1){
                        $products = ProductDetail::all();
                        
                        $data = QuickStart::all();
                        // dd('hello')
                    return view('user.customer-dashboard',compact('products','data','realCategory'));

                    }else{
                        return redirect('/logout');
                    }
                    }else{
                        //  FETCH AVAILABLE PLANS
                    $availablePlans = [ 'price_1If8VPEgl2c23Bzjq8LUvao7' => 'Monthly',
                    'price_1If8QdEgl2c23BzjE4HCoJc3' => 'Yearly',
                    
                    ];


                    //  FETCH SUBSCRIPTION REQUIRED DATA
                    $data = [
                        'intent' => Auth::user()->createSetupIntent(),
                        'plans' => $availablePlans,
                    ];
                    
                    //  VIEW PAYMENT PAGE WITH DATA
                    return view('payment')->with($data);
                    }
                    }
                    // dd($subscriptions);

                    
                }


            }elseif (Auth::user()->user_type == "freelancer") {
                if(Auth::user()->status ==1)
                {
                    $user_id = auth()->id();
                    $products = ProductDetail::where('user_id', $user_id)->get();
                    $productAdded = count($products);
                    return view('freelancer.freelancer-dashboard', compact('productAdded','realCategory'));
                }else
                {
                    // Auth::logout();

                    // $request->session()->invalidate();

                    // $request->session()->regenerateToken();

                    return redirect('/logout')->with('error','Your Account is Deactivated!');
                }
            }elseif(Auth::user()->user_type == "admin"){

                $user_id = auth()->id();
                $products = ProductDetail::where('user_id', $user_id)->get();
                $productAdded = count($products);
                return view('admin.index', compact('productAdded','realCategory'));
            }

        }
    }

    public function subscribe(Request $request)
    {

        $paymentMethod = $request->payment_method;

        $planId = $request->plan;
        

        Auth()->user()->newSubscription('main', $planId)->withCoupon($request->coupon)->create($paymentMethod);

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

        return redirect('/login');
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