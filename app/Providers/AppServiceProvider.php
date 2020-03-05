<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;


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
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('CATEGORIES');

            $event->menu->add([
                'text' => 'Categories',
                'url' => 'admin/categories',
                'label' => \App\Category::count()
            ]);

             $event->menu->add([
                'text' => 'Add category',
                'url' => 'admin/categories/create',
            ]);
            
            $event->menu->add('PRODUCTS');

            $event->menu->add([
                'text' => 'Products',
                'url' => 'admin/products',
                'label' => \App\Product::count()
            ]);

             $event->menu->add([
                'text' => 'Add product',
                'url' => 'admin/products/create',
            ]);

        });
    }
}
