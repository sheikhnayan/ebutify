@extends('front.layout.main')
@section('content')
    <main class="login-from-bg">
        <div class="eb-about-bg"></div>
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
                                        <div class="row mt-2">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="plan--payment_system selected-plan">
                                                    <div class="free_month_badge text-center">
                                                        <div class="inner" style="margin-top: 12px;">Best Choice</div>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioMonthly" name="customRadio"
                                                            class="custom-control-input payment-radio d-none">
                                                        <label class="custom-control-label" for="radioMonthly">
                                                            <p><span class="from-yr">Yearly- </span>
                                                                <span class="pricing-num">$24.00<span class="pr-per">/month</span> </span>
                                                            </p>
                                                            <p><span class="pricing-num">To Pay Today: $288.00 </span></p>
                                                            <div class="plan-duration">
                                                                <strike>$588.00</strike> <span class="text-pink">Save 50%</span>
                                                                <p style="color: #cccccc; font-size: 16px;">Billed annually for $288.00</p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 m-b-10 col-md-6">
                                                <div class="plan--payment_system sm-pading-point">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioYearly" name="customRadio"
                                                            class="custom-control-input payment-radio d-none">
                                                        <label class="custom-control-label" for="radioYearly">
                                                            <p><span class="from-yr">Monthly- </span>
                                                                <span class="pricing-num">$29.00<span class="pr-per">/month</span> </span>
                                                            </p>
                                                            <p><span class="pricing-num">To Pay Today: $29.00 </span></p>
                                                            <div class="plan-duration">
                                                                <strike>$49.00</strike> <span class="text-pink">Save 40%</span>
                                                                <p style="color: #cccccc; font-size: 16px;">Billed monthly for $29.00</p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <div class="col-sm-12 col-md-6 mx-auto">
                                                <div class="payment-container choose-paypal ">
                                                    <div class="pull-left ml-2" aria-label="Adding PayPal">
                                                        <span class="paypal-load"><i class="fab fa-paypal"></i>PayPal</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                            
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
                                                <img src="images/credit-cards.jpg" style="height: 24px; margin-top: 3px;">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="card_payment_from">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 16px;">Card Number</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1234 1234 1234 1234">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label" style="font-size: 16px;">Expiration
                                                                Date</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="MM/YY">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label" style="font-size: 16px;">CVC (3 digits)</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="CVC">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label" style="font-size: 16px;">ZIP/Postal
                                                                Code</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="90210">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="display: block !important">
                                                    <div class="form-group text-center holder-button">
                                                        <div class="col-sm-12">
                                                            <button class="btn free-trial-start-btn" type="submit" name="subsignup">
                                                                Complete Account
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="display: block !important">
                                                    <div class="form-group text-center holder-button">
                                                        <div class="col-sm-12">
                                                            <button class="btn another-trial-btn" type="submit" name="subsignup">
                                                                Choose another activation method
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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
    @endsection