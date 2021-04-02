<?php

namespace Devhiren\Template;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        //$this->app->make('Devhiren\Registration\RegistrationController');
        $this->loadViewsFrom(__DIR__.'/views', 'template');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/template'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //include __DIR__.'/routes.php';
    }
}
