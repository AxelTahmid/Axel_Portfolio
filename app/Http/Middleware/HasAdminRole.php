<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasAdminRole
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
        // return auth()->user() && auth()->user()->is_admin ?  $next($request) :  redirect('/login');

        if (auth()->user() && auth()->user()->is_admin) {
            return $next($request);
        }

        abort(403, 'Access denied');
        // return redirect('/login')->with('error', 'Permission Denied!!! You do not have administrative access.');
    }
}
