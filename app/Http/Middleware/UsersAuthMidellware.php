<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersAuthMidellware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->get('users') || session()->get("login") != true){

            toastr()->error('Veuillez vous authentifier');
            return redirect()->route('login.users');
        }
        return $next($request);
    }
}
