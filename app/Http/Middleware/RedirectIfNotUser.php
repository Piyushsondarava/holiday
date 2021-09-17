<?php

namespace App\Http\Middleware;

use Closure;
use View;
use Session;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotUser{
    
    public function handle($request, Closure $next)
    {
        if(Auth::check() == false){
            Session::flush();
            return redirect(route('admin.login'));
        }
        
        return $next($request);
    }
}
