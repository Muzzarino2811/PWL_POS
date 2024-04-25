<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  $roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah pengguna sudah login atau belum
        if (!Auth::check()) {
            return redirect('login');
        }

        // Simpan data pengguna pada variabel $user
        $user = Auth::user();

        // Jika tidak ada peran yang diberikan, lanjutkan request
        if (empty($roles)) {
            return $next($request);
        }

        // Jika pengguna memiliki peran yang sesuai, lanjutkan request
        if (in_array($user->level_id, $roles)) {
            return $next($request);
        }

        // Jika pengguna tidak memiliki akses, kembalikan ke halaman login dengan pesan kesalahan
        return redirect('login')->with('error', 'Maaf, Anda tidak memiliki akses.');
    }
}
