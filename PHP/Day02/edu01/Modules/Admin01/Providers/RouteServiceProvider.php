<?php

namespace Modules\Admin01\Providers;

use Validator;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Admin01\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Validator::extend('is_positive_integer', function($attribute, $value, $parameters, $validator){
            if (is_numeric($value)){
                return true;
            }
            return false;
        });
        
        // Validator::extend('is_positive_integer', function($attribute, $value, $parameters, $validator) {
        //     if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Admin01', '/Routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Admin01', '/Routes/api.php'));
    }
}
