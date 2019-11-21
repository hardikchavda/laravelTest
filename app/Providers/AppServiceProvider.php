<?php

namespace App\Providers;

use App\User;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\ServiceProvider;
use App\userInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot(Dispatcher $events)
    {
        
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add([
                'text' => 'Add Users',
                'url' => 'admin/addusers',
                'icon'=>'far fa-user'
            ]);
            $event->menu->add([
                'text' => 'Add UsersInfo',
                'url' => 'admin/addusersinfo',
                'icon'=>'far fa-edit'
            ]);
            $event->menu->add([
                'text' => 'Show All UsersInfo',
                'url' => 'admin/allusers',
                'icon'=>'far fa-edit',
                'label'       => userInfo::all()->count(),
                'label_color' => 'success',
            ]);
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
