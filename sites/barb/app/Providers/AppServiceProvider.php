<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Http\ViewComposers\MenuComposer;
use App\Http\ViewComposers\HeaderComposer;
//use Laravel\Dusk\DuskServiceProvider;
//use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		 view()->composer('front/layout',MenuComposer::class);

		 view()->composer('back/layout',HeaderComposer::class);

		 Blade::if('admin', function () {
			 return auth()->user()->role === 'admin';
		 });
//removed this auth level for now
//		 Blade::if('redac', function () {
//			 return auth()->user()->role === 'redac';
//		 });

		 Blade::if('request', function ($url) {
			 return request()->is($url);
		 });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
