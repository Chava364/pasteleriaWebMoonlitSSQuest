<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserSessionMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('user_id')) {
            if (Auth::check()) {
                $userId = Auth::id();
                Session::put('user_id', $userId);
            }
        }

        return $next($request);
    }

}
