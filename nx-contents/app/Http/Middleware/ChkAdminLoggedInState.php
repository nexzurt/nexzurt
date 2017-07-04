<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ChkAdminLoggedInState
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
        if(! Auth::guard('admin')->check())
        {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
