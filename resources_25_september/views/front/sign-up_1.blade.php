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
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <div class="col-12 my-2">
                                                <input class="form-control" type="text" required="" placeholder="Username (no special characters)" name="Name">
                                            </div>
                                        </div>
                                
                                        <div class="form-group ">
                                            <div class="col-12 my-3">
                                                <input class="form-control" type="email" placeholder="Email" name="Email">
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <div class="col-12 password_input_from my-3">
                                                <span class="password-icon"><i class="far fa-eye"></i></span>
                                                <input class="form-control" type="password" placeholder="Password" name="Password">
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <div class="col-12 my-2">
                                                <input class="form-control" type="password" placeholder="Confirm Password" name="PasswordConfirm">
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="col-12">
                                                <button class="btn btn-create_account" type="submit" name="create_acc_btn">Create an account now! </button>
                                            </div>
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