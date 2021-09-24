@extends('front.layout.main')

@section('head')
    <script src="https://js.stripe.com/v3/"></script>

    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection


@section('content')
    <main class="login-from-bg">
        <div class="eb-about-bg"></div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="login-from">
            <div class="container">
                <div class="row login-from-main">
                    <div class="sign_up-from-main_2 shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="sign_up_from-2_content text-center mx-auto">
                                    <h2>Start your Journey <span>With #1 Product Research Tools</span></h2>
                                    <div class="progress progress-md" style="height:20px !important">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 100%; font-size: .8rem; background-color: #5fbeaa !important;">
                                            Step 2 of 2
                                            <span class="sr-only">Step 2 of 2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sign_up_main_content">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 sign_up_faq mx-auto mt-3 text-muted p-3 order-3 order-lg-1 order-sm-3">
                                    <h6>Why do you need my PayPal or Credit Card info?</h6>
                                    <p>We ask for this information to allow your service to continue with eButify. This also helps us reduce fraud and spam.</p>
                            
                                    <h6>Will my PayPal or Credit Card be charged right now?</h6>
                                    <p>Yes. Your PayPal or Credit Card be charged right now.</p>
                            
                                    <h6>Can I cancel anytime?</h6>
                                    <p>Yes. if you decide that eButify isn’t for you, you can cancel whenever you want to, both
                                        during and after your trial. One click from subscriptions page.</p>
                                </div>
                                <div class="col-lg-7 col-sm-12 mx-auto order-lg-3">
                                    <div>
                                        <div class="row px-3">
                                            <div class="d-none d-md-block"
                                                style="border-bottom: 1px solid #e7e7e7; width: 100%; margin-bottom: -30px;">
                                                &nbsp;
                                            </div>
                                            <div class="col-sm-12 sign_up_Duration_header text-center mb-2 mt-1">
                                                <span class="pr-md-4 pl-md-4">Choose Your Duration</span>
                                            </div>
                                        </div>
                                        <form id="myForm">
                                        <div class="row mt-2">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="plan--payment_system" id="yearly">

                                                    <div class="free_month_badge text-center">
                                                        <div class="inner" style="margin-top: 12px;">Best Choice</div>
                                                    </div>

                                                    <div class="custom-control custom-radio">
                                                        <input type="radio"
                                                            class="custom-control-input payment-radio d-none" value="price_1JPqopCzBVgP4kKNdvtju0GZ" name="plan" id="yearly_plan">
                                                        <label class="custom-control-label" for="subscription-plan">
                                                            <p><span class="from-yr">{{$plans['price_1JPqopCzBVgP4kKNdvtju0GZ']}}</span>
                                                                <span class="pricing-num">$420.00 USD<span class="pr-per">/year</span> </span>
                                                            </p>
                                                            <p><span class="pricing-num">To Pay Today: $420.00 </span></p>
                                                            <!-- <div class="plan-duration">
                                                                <strike>$588.00</strike> <span class="text-pink">Save 50%</span>
                                                                <p style="color: #cccccc; font-size: 16px;">Billed annually for $288.00</p>
                                                            </div> -->
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 m-b-10 col-md-6">
                                                <div class="plan--payment_system sm-pading-point" id="monthly">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" name="plan" id="monthly_plan" value="price_1JPqeZCzBVgP4kKNPA6XL5mX"
                                                            class="custom-control-input payment-radio d-none">
                                                        <label class="custom-control-label" for="radioYearly">
                                                            <p><span class="from-yr">{{$plans['price_1JPqeZCzBVgP4kKNPA6XL5mX']}}</span>
                                                                <span class="pricing-num">$35.00 USD<span class="pr-per">/month</span> </span>
                                                            </p>
                                                            <p><span class="pricing-num">To Pay Today: $35.00 </span></p>
                                                            <div class="plan-duration">
                                                                <!-- <strike>$29.00</strike> <span class="text-pink">Save 40%</span>
                                                                <p style="color: #cccccc; font-size: 16px;">Billed monthly for $29.00</p> -->
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </form>

                                        <div class="row px-3 login_from_mt">
                                            <div class="d-none d-md-block"
                                                style="border-bottom: 1px solid #e7e7e7; width: 100%; margin-bottom: 30px;">
                                                &nbsp;
                                            </div>
                                            <div class="col-sm-12 login_from_activate_trial text-center">
                                                <span>Choose Payment Method</span>
                                            </div>
                                        </div>
                                        <div class="row method-choose-section">
                                            <!-- <div class="col-sm-12 col-md-6 mx-auto">
                                                <div class="payment-container choose-paypal ">
                                                    <div class="pull-left ml-2" aria-label="Adding PayPal">
                                                        <span class="paypal-load"><i class="fab fa-paypal"></i>PayPal</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div> -->
                            
                                            <div class="col-sm-12 col-md-6 m-b-10 credit-hide">
                                                <div class="payment-container choose-credit-card">
                                                    <div class="pull-left ml-4" aria-label="Adding Credit Card">
                                                        <span class="creadit-card-load"><i class="far fa-credit-card"></i>Credit Card</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row paypal-trial-btn" style="display: block">
                                            <div class="form-group text-center holder-button">
                                                <div class="col-sm-12">
                                                    <button class="btn free-trial-start-btn" type="submit" name="subsignup">
                                                        Complete Account
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="credit_card_detail mb-3">
                                            <div class="payment_banner">
                                                <h5>Enter Your Detail</h5>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="card_payment_from">
                                                <div class="mb-3">
                                                    <label for="card-holder-name" class="form-label" style="font-size: 16px;">Card Holder Name</label>
                                                    <input placeholder="Card Holder" class="form-control" id="card-holder-name" type="text">
                                                    <label for="card-element" class="form-label" style="font-size: 16px;">Card Number</label>
                                                    <!-- Stripe Elements Placeholder -->
                                                    <div id="card-element"></div>
                                                </div>

                                                <div class="row" style="display: block !important">
                                                    <div class="form-group text-center holder-button">
                                                        <div class="col-sm-12">
                                                            <button class="mt-2 btn btn-sm btn-primary btn free-trial-start-btn" id="card-button" data-secret="{{ $intent->client_secret }}">
                                                            Complete Account
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>


<!--                                                 <div class="row" style="display: block !important">
                                                    <div class="form-group text-center holder-button">
                                                        <div class="col-sm-12">
                                                            <button class="btn another-trial-btn" type="submit" name="subsignup">
                                                                Choose another activation method
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>


                                        <div class="form-group text-center">
                                            <div class="col-12 sign_up-footer_policy">
                                                <p style="padding-left: 40px; padding-right: 40px; margin: 5px 0 20px 0;"><img
                                                        src="images/trust-paypal.png" class="img-fluid"></p>
                                                <p>By Clicking Complete Account Button or The Paypal Button You are agreeing
                                                    to eButify's
                                                    <a href="/terms-and-conditions">Terms and Conditions</a>
                                                    and <a href="/privacy-policy">Privacy Policy</a>
                                                </p>
                                                <p>Your membership will start when you complete your account and will end once your cancel your
                                                    subscription. You will be billed on the same day each month or year based on your
                                                    membership start date.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
<!-- <br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscribe</div>
<br><br>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <select name="plan" class="form-control" id="subscription-plan">
                            @foreach($plans as $key=>$plan)
                                <option value="{{$key}}">{{$plan}}</option>
                            @endforeach
                    </select>


                    <input placeholder="Card Holder" class="form-control" id="card-holder-name" type="text">


                    <div id="card-element"></div>

                    <button class="mt-2 btn btn-sm btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">
                        Subscribe
                    </button>



                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

@section('js')
    <script>
        window.addEventListener('load', function() {
            const stripe = Stripe('{{env('STRIPE_KEY')}}');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;

            var plan ;

            $("#monthly").click(function (){
                const plan = 'price_1JPqeZCzBVgP4kKNPA6XL5mX';
            });

            $("#yearly").click(function (){
                const plan = 'price_1JPqopCzBVgP4kKNdvtju0GZ';
            });
            
            // const plan = $('input[name=plan]:checked', '#myForm').val();
            cardButton.addEventListener('click', async (e) => {
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                    console.log('error');
                } else {
                    console.log(plan);
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);
                     axios.post('https://ebutify.com/subscribe',{
                        payment_method: setupIntent.payment_method,
                        plan : plan
                    }).then((data)=>{
                        location.replace(data.data.success_url)
                    });
                }
            });
        })
    </script>
@endsection