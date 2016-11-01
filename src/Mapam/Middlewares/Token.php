<?php

namespace Mapam\Middlewares;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Token {

    protected $app;

    public function __construct(Application $app) {
        $this->app = $app;
    }

    public function handle($request, Closure $next) {
        if ($this->app->isDownForMaintenance()) {
            throw new HttpException(503);
        }

        if ($request->input('token') !== 'QWERTY') {
            //throw new HttpException(401); // should be 401
            return response()->view('isolateView::401', [], 401);
        }

        return $next($request);
    }
}
