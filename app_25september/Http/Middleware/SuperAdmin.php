<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->user_type != 'admin'){
                return redirect()->back()->with('error', 'You Do Not Have Permission!');
            }
        
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
