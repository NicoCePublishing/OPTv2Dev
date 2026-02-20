<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('staff')) {
            if ($request->ajax()) {
                return response('Session Expired', 401); // Return a 401 Unauthorized response for AJAX requests
            } else {
                return redirect()->route('login_page'); // Redirect non-AJAX requests to the login page or a suitable URL
            }
        }
        
        return $next($request);
    }
}
