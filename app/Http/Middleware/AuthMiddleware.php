<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Check apakah sudah login
        if (auth()->check()) {
            //Jika sudah jalankan code berikut
            return $next($request);
        } else {
            //Jika belum arahkan ke halaman login
            return redirect('/login')->with(['message' => 'Anda Belum Login']);
        }
    }
}
