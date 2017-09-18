<?php namespace Modules\Admin\Http\Middleware;

use Closure;

class Authorize
{
    public function handle($request, Closure $next)
    {
        header('Authorized: true');
        return $next($request);
    }
}