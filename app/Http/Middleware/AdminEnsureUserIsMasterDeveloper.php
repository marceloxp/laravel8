<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminEnsureUserIsMasterDeveloper
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
        $user = auth()->guard('admin')->user();
        if (!$user->hasRole('Master') && !$user->hasRole('Developer')) {
            return redirect()->route('adminDashboard');
        }
        return $next($request);
    }
}