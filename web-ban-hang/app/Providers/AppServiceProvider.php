<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Field;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partial.header', function ($view) {
            $fields = Field::all();
            $categories = Category::all()->groupBy('FieldParentID');
            $view->with(compact('fields', 'categories'));
        });
    }
}
