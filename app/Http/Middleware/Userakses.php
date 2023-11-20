<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        // Pastikan user telah login
        if ($user) {
            $allowedRoles = ['admin', 'mahasiswa', 'dosen'];

            // Pastikan user memiliki role yang diizinkan
            if (in_array($user->role, $allowedRoles)) {
                return $next($request);
            }
        }

        // Jika user tidak memiliki role yang diizinkan, kembalikan response JSON
        return response()->json(['message' => 'Anda tidak diperbolehkan akses halaman ini!'], 403);
    }
}
