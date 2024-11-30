<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if (($request->path()=='login' || $request->path()=='/') && $request->session()->has('user')) {
            return redirect('/home');
        }
        else if (($request->path()=='login' || $request->path()=='/') && $request->session()->has('admin')) {
            return redirect('/adminhome');
        }
        return $next($request);
    }
}
