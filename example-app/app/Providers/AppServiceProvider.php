<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

  
public function boot()
{
    View::composer('layout.layout', function ($view) {
        $user = Auth::user();
        $view->with('user', $user);
    });
}
}
