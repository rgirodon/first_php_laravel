<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ContactsService;

class ContactsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ContactsService::class,
            function($app) {
                return(new ContactsService());
            });
    }
}
