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
                                @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form class="login" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <h2>Login to Your <span>Account</span></h2>
                <div class="mb-4 font-medium text-sm text-green-600"  style="background:red;color:#fff; border-radius:10px; text-align:center;">
                    {{ session('error') }}
                </div>
                <x-jet-label class="form-label" for="email" value="{{ __('Email') }}" />
                <x-jet-input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="form-label" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                    <div class="col-12 form-group">
                        <div class="g-recaptcha" data-sitekey="6LfZa0kcAAAAAF_dT1qolY5zdbjIcFyQ9dD7auW4"></div>
                    </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Check-reCaptcha" name="remember">
                            <label class="form-check-label" for="Check-reCaptcha">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-6 lost-password">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 from-log_in-btn">
                        
                    <x-jet-button class="btn login-btn">
                        {{ __('Log in') }}
                    </x-jet-button>

                    </div>
                    <div class="col-12">
                        <div class="new-user-sign_up">
                            <p>New user to eButify? <a href="/register">Sign Up Now</a></p>
                        </div>
                    </div>
                </div>
            </div>

            
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        (function ($) {
        'use strict';
    
        var form = $('.login'),
            form_data;
        
        form.submit(function (e) {
            e.preventDefault();
            form_data = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form_data
            })
            .done(done_func)
            .fail(fail_func);
        });
    })(jQuery);
    </script>
    @endsection
