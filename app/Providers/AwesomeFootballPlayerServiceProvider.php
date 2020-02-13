<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AwesomeFootballPlayerService;

class AwesomeFootballPlayerServiceProvider extends ServiceProvider {
    
/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        
        // nothing to do
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        
        $this->app->bind('awesomeFootballPlayerService', 
                            function($app) {
                                return(new AwesomeFootballPlayerService());
                            });
    }
}
