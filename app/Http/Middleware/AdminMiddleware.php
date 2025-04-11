<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\AdminMiddleware as Middleware;
class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->type == 'Admin') {
            return $next($request);
        }
        return redirect('/administrador/dashboard')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
