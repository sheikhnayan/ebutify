@extends('front.layout.main')
@section('content')
    <main class="login-from-bg">
        <div class="eb-about-bg"></div>
        <div class="login-from">
            <div class="container">
                <div class="row login-from-main">
                    <div class="col-sm-12 col-md-5">
                        <div class="benefit_block">
                            <img src="{{ asset('front/images/login.png') }}" width="100%">
                            <h3>Benefits to Joining</h3>
                            <ul class="text__block">
                                <li>Access to Unlimited Products</li>
                                <li>Download Fresh Thumbnail & Ads Videos</li>
                            </ul>
                            <ul class="text__block">
                                <li>Access to facebook Audience Research</li>
                                <li>Explore AliExpress, Amazon, and Shopify Store</li>
                                <li>Manage Orders & Subscription</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 login-from-content">
                        <div class="account-login-from">
                            <div class="eb-acc-login-from">
                                <from>
                                    <h2>Login to Your <span>Account</span></h2>
                                    <div class="mb-3">
                                        <label for="userNameInput" class="form-label">User Name</label>
                                        <input type="name" class="form-control" id="userNameInput" placeholder="User name or email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="passwordInput" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="passwordInput">
                                    </div>
                                
                                    <div class="row from-check-re_captch">
                                        <div class="col-7">
                                            <div class="form-check">
                                                <input class="form-check-input robot-input" type="checkbox" value="" id="Check-reCaptcha">
                                                <label class="form-check-label" for="Check-reCaptcha">
                                                    I'm not a robot
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-5 text-center re-captcha-content">
                                            <img src="{{ asset('front/images/logo_48.png') }}" width="30" height="30">
                                            <p class="re-captcha-text">reCAPTCHA</p>
                                            <p class="re-captcha-policy"><a href="">Privacy</a>-<a href="">Terms</a></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Check-reCaptcha">
                                                <label class="form-check-label" for="Check-reCaptcha">
                                                    Remenber me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 lost-password">
                                            <a href="">Lost your password?</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 from-log_in-btn">
                                            <a href="" type="button" class="btn login-btn">Log in</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="new-user-sign_up">
                                                <p>New user to eButify? <a href="sign-up_1.html">Sign Up Now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </from>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection