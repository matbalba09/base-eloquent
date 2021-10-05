<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use App\Response;
use Illuminate\Http\Request;
use Closure;

class Admin
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
        if (Auth::user() &&  Auth::user()->role == RESPONSE::ADMIN) {
            return $next($request);
        }else{
            abort(403, 'Access denied');
        }
    }
}
