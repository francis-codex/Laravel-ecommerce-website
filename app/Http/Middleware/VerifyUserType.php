<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserType
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
       // dd(session()->get('admin'));
        if($request->session()->get('admin'))
        {
           // dd(1);
           return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
