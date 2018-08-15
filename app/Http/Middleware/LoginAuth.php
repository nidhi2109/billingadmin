<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class LoginAuth
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
        if((Session::has('userid'))) {
            return $next($request);
        }
        return redirect('login')->with('errorMsg','You have not admin access');


    }
}
