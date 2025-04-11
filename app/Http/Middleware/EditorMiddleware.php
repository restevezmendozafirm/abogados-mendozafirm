<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard()->check() && Auth::user()->type == 'editor') {
            return $next($request);
        }

        return redirect('/')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
