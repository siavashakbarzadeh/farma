<?php

namespace App\Providers;

use Botble\Base\Providers\BaseServiceProvider;
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
        dd(BaseServiceProvider::class);
        $this->mergeConfigFrom(base_path('platform/core/base/config/admin_languages.php'),'core.base.admin_languages');
    }
}
