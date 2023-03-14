<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddlewhere
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role)
    { 
        if (Auth::check() && Auth::user()->role==$role) {
            return $next($request);
        }
        return response()->json(["anda tidak bisa masuk"]);
    }
    
    // ini error 
    
    // {
    // if (in_array($request->user()->role, $role)) {
    //     return $next($request);
    //     }
    //     return redirect('/');
    // }

}