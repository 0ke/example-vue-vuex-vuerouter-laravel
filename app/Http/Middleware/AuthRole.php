<?php

namespace App\Http\Middleware;

use Closure;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->hasRole($role)) {
            return $next($request);
        }

        $swal = ['type' => 'warning', 'title' => 'Geen toegang', 'text' => 'U heeft geen ' . $role . ' bevoegdheid.'];
        try {
            return back()->withSwal($swal);
        } catch (Exception $e) {
            return redirect()->route('main.home')->withSwal($swal);
        }
    }
}
