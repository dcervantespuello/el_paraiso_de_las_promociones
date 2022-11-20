<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarEdad
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
        if ($request->edad < 18) {
            return redirect('contacto');
        }

        return $next($request);
    }
}
