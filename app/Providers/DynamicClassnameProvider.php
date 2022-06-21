<?php
namespace App\Providers;
use App\Models\Kategori;
use Illuminate\Support\ServiceProvider;
class DynamicClassnameProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view)
        {
            $view->with('ktgr_array', Kategori::all());
        });
    }
}
