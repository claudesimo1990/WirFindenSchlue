<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class order
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
        if (auth()->guest()){
            return redirect('anmeldung');
        }elseif (Auth::id() == request('id')){
           return $next($request);
        }else{
            return redirect('/');
        }
    }
}
