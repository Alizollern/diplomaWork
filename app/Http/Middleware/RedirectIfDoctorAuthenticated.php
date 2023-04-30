<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfDoctorAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   	public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('doctor')->check()) {
            return redirect('/doctor/search');
        }

        return $next($request);
    }
}
