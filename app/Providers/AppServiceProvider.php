<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Response;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	//
    	
    	Response::macro('myRes', function($value) {
    		
    		return Response::make($value);
    		
    	});
    	
    	/*DB::listen(function ($query) {
    		
    		dump($query->sql);
    		//dump($query->bindings);
    		
    	}); */
    	
    	
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
