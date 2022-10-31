<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        // cek jika sudah login atau belum
        // if (auth()->guest()) {
        //     abort(403, 'Unauthorized action.');
        // }

        // jika sudah login tapi bukan admin
        if (!auth()->user()->is_admin) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
