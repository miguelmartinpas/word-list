<?php

namespace Mapam\Providers;

use Illuminate\Support\ServiceProvider;

use Mapam\Services\WordList as WordListService;
use Mapam\Middlewares\Token as TokenMiddleware;

class AppService extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {

      // Middlewares
      $this->app->singleton('TokenMiddleware', function($app){
        return new TokenMiddleware($app);
      });

      // Services
      // $this->app->bind('WordListService', function($app) {
      $this->app->singleton('WordListService', function($app) {
        return new WordListService();
      });

    }
}
