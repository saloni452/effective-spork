<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MySuperAdmin
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
        //return $next($request);
        //if(auth()->user()->is_admin == 1)
        if (auth()->user()->role == 'admin') {
            return $next($request);
        }else{
            return redirect('home')->with('error',"Only admin can access!");
        }
    }
}
