<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
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

    //     return $next($request);
        if (Auth::guard('admin')->user()) {
            if(request()->route()->getName() == "admin.login"){
                return redirect()->route('admin.dashboard');
            }
            return $next($request);
        }

        return redirect()->route('admin.login');

    }
}
