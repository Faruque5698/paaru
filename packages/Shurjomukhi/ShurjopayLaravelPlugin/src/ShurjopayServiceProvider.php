<?php

namespace Shurjomukhi\ShurjopayLaravelPlugin;

use Illuminate\Support\ServiceProvider;

/**
 * Authors: "Rayhan Khan Ridoy" , "Shurjomukhi Ltd" & "Mominur Rahman"
 * Date: 05-Nov-2022
 *
 * This is Shurjopay Service-Provider.It has two core methods named as register() & boot()
 * like other general service-provider.
 *
 * Inside register() method:-
 *      * Shurjopay controller is registered.
 *      * Merged package's custom config with applicatin config's directory.
 * Inside boot() method:-
 *      * Package's custom configuration is published.
*/

class ShurjopayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Shurjomukhi\ShurjopayLaravelPlugin\Http\Controllers\Shurjopay');
        $this->mergeConfigFrom(__DIR__.'/../config/shurjopay.php', 'Shurjopay');  //'Shurjopay' is a key for accessing value
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        # for exporting config file
        if ($this->app->runningInConsole())
        {
            $this->publishes(
            [
                # Publishing package config/shurjopay.php to application config/Shurjopay.php
              __DIR__.'/../config/shurjopay.php' => config_path('Shurjopay.php'),
            ], 'shurjopay');
        }
    }

}
