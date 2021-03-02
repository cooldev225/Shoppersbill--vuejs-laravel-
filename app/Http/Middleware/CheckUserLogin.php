<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->user_types != 'Merchant' && $request->user()->user_types != 'Buyer') {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
