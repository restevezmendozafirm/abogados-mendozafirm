<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictIpMiddleware
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
        $allowedIps = [
            '209.35.185.251', 
            '127.0.0.1',
            '187.155.111.235',
            '189.174.118.158',
            '209.35.187.29',
            '187.155.115.166',
            '162.144.34.76',
            '189.174.86.164',
            '189.174.93.137'
        ];
        $clientIp = $request->header('X-Forwarded-For') ?? $request->ip();

        if (in_array($clientIp, $allowedIps)) {
            return $next($request);
        }
        
        return response()->view('noaccess');
    }

}
