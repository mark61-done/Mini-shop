<?php
// app/Http/Middleware/AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated AND is admin
        if (auth()->check() && auth()->user()->email === 'admin@minishop.com') {
            return $next($request);
        }
        
        // If not admin, redirect to home page
        return redirect('/')->with('error', 'Access denied. Admin only.');
    }
}