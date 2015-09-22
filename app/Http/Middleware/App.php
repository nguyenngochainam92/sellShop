<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Bus\Dispatcher as BusDispatcher;

class App
{
	public function handle($request, Closure $next)
	{
		event('user.access');

		return $next($request);
	}

}
