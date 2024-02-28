<?php

namespace lhaamed\LaraFs;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class LaraFsServiceProvider extends ServiceProvider
{


    public function register()
    {
        $this->app->singleton('FS', function ($app) {
            return new LaraFsService();
        });
    }

    public function boot()
    {
//
//        $this->mergeConfigFrom(__DIR__ . '/config/larafs.php','LaraFs');
//
//        $this->loadViewsFrom(__DIR__.'/views','FS');
//
//        $this->publishes([
//            __DIR__ . '/assets' => base_path('public/assets/larafs'),
//        ],'larafs-assets');
//


        Blade::directive('fs', function ($expression) {

            $exploded_expression = explode(',',$expression);
            $icon = $exploded_expression[0] ?? null;
            $type = $exploded_expression[1] ?? null;
            return "<?php echo FS::render($icon,$type); ?>";
        });

    }


}
