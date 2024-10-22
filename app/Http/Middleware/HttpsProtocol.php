<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpsProtocol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (config('larapen.core.forceHttps')) {
			// $request->setTrustedProxies([$request->getClientIp()], $request::HEADER_X_FORWARDED_ALL);
			if (!$request->secure()) {
				/* $request->server('HTTP_X_FORWARDED_PROTO') != 'https' */
				// Production is not currently secure
				// return redirect()->secure($request->getRequestUri());
			}
		}
        return $next($request);
    }
}
