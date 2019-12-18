<?php

namespace App\Http\Middleware;

use Closure;

class CanEdit
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
        $pleaseExists = $request->exists('please');
        $role = $request->

        if ($pleaseExists) {
            return $next($request);
        } else {
            return response( "You must say the magic word.");
        }
        
    }
}