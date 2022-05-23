<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (auth()->guest()) {
            return redirect()->route('login');
        }

        if (auth()->user()->isAdmin()) {
            return $next($request);
        }

        foreach ($roles as $role) {
            $role = strtolower($role);

            abort_if($role === 'admin' && !auth()->user()->isAdmin(), 403, 'Hak akses tidak valid');
        }

        return $next($request);
    }
}
