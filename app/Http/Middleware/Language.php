<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Routing\Middleware;

class Language implements Middleware
{

    public function __construct(Application $app, Redirector $redirector, Request $request) {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Make sure current locale exists.
        $locale = locale($request);

//        if (isEn($request->segment(1)))
//        {
//            $segments = $request->segments();
//            unset($segments[0]);
//            $segments = array_values($segments);
//            $url = implode('/', $segments) . ( $request->query() ? '?'. http_build_query($request->query()) : '' );
//            return $this->redirector->to( $url );
//        }

        $this->app->setLocale($locale);

        return $next($request);
    }

}
