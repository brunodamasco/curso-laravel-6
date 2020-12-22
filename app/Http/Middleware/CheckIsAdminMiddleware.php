<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if (in_array($user->email, ['elsa73@example.com', 'kennith62@example.net', 'brunodamasco1@gmail.com', 'bruno@gmail.com'])) {
            return redirect('/');
        }
        return $next($request);
    }
}
