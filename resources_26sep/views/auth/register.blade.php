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
                            <div class="sign_up_note my-4 bg-light">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i>Save hours a day in researching products.</li>
                                    <li><i class="fas fa-chevron-right"></i>Make money by only promoting proven winners</li>
                                    <li><i class="fas fa-chevron-right"></i>Learn in our Dropshipping Success Academy</li>
                                    <li><i class="fas fa-chevron-right"></i>It’s very easy to try! Nothing to lose, and everything to gain!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 login-from-content">
                        <div class="account-login-from">
                            <div class="sign_up_from_content shadow-sm text-center mx-auto">
                                <h2>Start your Journey <span>With eButify</span></h2>
                                <div class="progress progress-md" style="height:20px !important">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%; font-size: .8rem; background-color: #5fbeaa !important;">
                                        Step 1 of 2
                                        <span class="sr-only">Step 1 of 2</span>
                                    </div>
                                </div>
                                <div class="sign_up_content_text text-center" style="display: inherit;">
                                    <span class="d-none d-md-block">Join thousands of ecom entrepreneurs achieving dropshipping success</span>
                                    <span class="d-sm-block d-md-none">Join thousands of entrepreneurs</span>
                                </div>
                                <div class="p-20">
                <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" id="type" name="type" value="user">
            <div>
                <x-jet-input id="name" class="form-control" type="text" placeholder="Username (no special characters)" name="name" :value="old('name')" required autofocus autocomplete="name" />

            </div>

            <div class="col-12 my-3">
                <x-jet-input class="form-control" id="email" type="email" name="email" :value="old('email')" required placeholder="Email"/>
            </div>

            <div class="col-12 password_input_from my-3">
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
            </div>

            <div class="col-12 my-2">
                <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
            </div>
            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="btn btn-create_account">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection