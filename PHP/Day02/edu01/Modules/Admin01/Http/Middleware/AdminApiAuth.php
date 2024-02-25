<?php

namespace Modules\Admin01\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class AdminApiAuth
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
        // echo('\app\Http\Middleware\AdminApiAuth.php');
        // echo('\Modules\Admin01\Http\Middleware\AdminApiAuth.php<hr>');
        //E:\GitRepository\VueBackManSystem\PHP\Day02\edu01\Modules\Admin01\Http\Middleware\AdminApiAuth.php
        return $next($request);
    }
}
