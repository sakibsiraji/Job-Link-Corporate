<?php

namespace App\Http\Middleware;

use Closure;

class SessionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('ge_email')){
            return $next($request);
        }
        
        else if($request->session()->has('se_email')){
            return $next($request);
        }
        else if($request->session()->has('i_email')){
            
            return $next($request);
        }
        return redirect()->back();
    }
}
