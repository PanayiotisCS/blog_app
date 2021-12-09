<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;

class Admin
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->type==1){
            return $next($request);
        }

        return redirect()->route('login');
    }
}