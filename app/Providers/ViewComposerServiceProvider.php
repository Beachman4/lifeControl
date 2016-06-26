<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use User;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->User();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function User()
    {
        view()->composer('templates.masterpage', function ($view) {
            $view->with('user', User::Get());
        });
    }
}
