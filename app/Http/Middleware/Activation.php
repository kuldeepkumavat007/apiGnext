<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Activation
{
    /**
     * Handle an incoming request.
     *
     * @return RedirectResponse|mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        return $next($request); 
    }

    /**
     * If application is already activated.
     */
    public function alreadyActivated(): bool
    {
        return true;
    }
}
