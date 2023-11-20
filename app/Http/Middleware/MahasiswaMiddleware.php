<?php

namespace App\Http\Middleware;

use Closure;

class MahasiswaMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the authenticated user has the 'mahasiswa' role or other Mahasiswa-specific logic
        if (auth()->check() && auth()->user()->role == 'mahasiswa') {
            return $next($request);
        }

        // If not, redirect or handle as needed
        return redirect('/mahasiswa'); // You can modify this line based on your application's logic
    }
}
