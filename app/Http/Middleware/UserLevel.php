<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$userLevel): Response
    {
        if (in_array($request->user()->level, $userLevel)) {
            return $next($request);
        }
        return redirect('/dashboard')->with(['middlewarelogin', 'Anda tidak memiliki akses route tersebut, dialihkan ke dashboard']);


        // abort(403, 'Unauthorized.');//ini saran dari char gpt
    }
}
