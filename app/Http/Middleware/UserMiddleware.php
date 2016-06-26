<?php

namespace App\Http\Middleware;

use Closure;
use User;
use Session;

class UserMiddleware
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
        if ($request->session()->has('user_id')) {
            if (User::Get()) {
                return $next($request);
            }
            return redirect('/login');
        }
        return redirect('/login');
    }
}
