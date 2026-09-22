<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(!$request->user() || !in_array($request->user()->role,['admin','manager']))
        {
            abort(403, "akrzalulia");
        }

        return $next($request);
    }
}
