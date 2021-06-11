<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Cache;
class CustomerMiddleware
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
        if (Auth::check() && Auth::User()->role_id == 2) {
             
            $url= Auth::user()->user_domain->full_domain;

            if($url != url('/')){
               
               Auth::logout();
               return redirect()->route('login');
            }
           return $next($request);
        }else{
            if(Auth::check()){
                Auth::logout(); 
            }
            return redirect('user/login');
        } 
        
    }
}
