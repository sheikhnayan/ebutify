<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            // access
            $secretKey = '6LfZa0kcAAAAAA1LliyaVu_kcBOTyNAVgez_Rtjs';
            $captcha = $_POST['g-recaptcha-response'];

            if(!$captcha){
            $error = '<p class="alert alert-warning">Please check the the captcha form.</p>';
            return back()->with('error','Please check the the captcha form.');
            }

            $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
            $responseKeys = json_decode($response,true);
            if(intval($responseKeys["success"]) !== 1) {
                echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
              } else {

            return Limit::perMinute(5)->by($request->email.$request->ip());
              }
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
