<?php

namespace App\Http\Middleware;
use App\User;
use Illuminate\Support\Facades\Auth;

use Closure;

class ValidateFirstUserSignUp
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
        $usersCount = User::Count();
        if($usersCount > 0 && Auth::check())
        {
        return redirect('/');
        }
        return $next($request);
    }
}
