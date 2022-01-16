<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

use Closure;

class FrontMiddleware
{
    public function handle($request, Closure $next)
    {
        if($request->input('access_code') != env('ACCESS_CODE')) {
            return response()->json(['status' => 401, 'code' => $request->input('access_code')]);
        }

        return $next($request);
    }
}
