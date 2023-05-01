<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, $role)
    {
          $user = Auth::user();
  
          if ($user && $user->role_id == $role) {
              return $next($request);
          }
  
        abort(403, 'Anda tidak memiliki hak mengakses laman tersebut! Buruken Uih deui');
    }

}
