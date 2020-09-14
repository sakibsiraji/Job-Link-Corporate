<?php

namespace App\Http\Middleware;

use Closure;

class CeSessionCheck
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
        if(!$request->session()->has('c_email')){
            return redirect()->back();
        }
        return $next($request);
    }
}
