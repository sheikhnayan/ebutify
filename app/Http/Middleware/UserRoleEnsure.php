<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserRoleEnsure
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next, ... $roles)
    {
        if (!Auth::check()){
            return redirect('login');
        }
        
        // $user = Auth::user()->user_type;

        if(Auth::user()->user_type == "user"){
            return $next($request);
        }
        return redirect('login');
            
    }
}
