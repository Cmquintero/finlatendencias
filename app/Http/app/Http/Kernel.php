<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string|array  $roles  Los roles permitidos (ej: 'admin', 'vendedor')
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
       
        if (!Auth::check()) {
          
            return redirect()->route('login');
        }

        $user = Auth::user();

    
        if (!in_array($user->role, $roles)) {
           
            abort(403, 'Acceso no autorizado. Tu rol no tiene permisos para esta sección.');
            
            
        }

        return $next($request);
    }
}