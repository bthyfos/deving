<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\ProductType;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (\Schema::hasTable('product_types'))
        {
            $ProductTypes          = ProductType::orderBy('name','ASC')
                                                            ->get();
            $selectProductTypes    = array();
            $selectProductTypes[0] = "Select / All";

            foreach ($ProductTypes as $ProductType) {
               $selectProductTypes[$ProductType->id] = $ProductType->name;
            }

             \View::share('selectProductTypes',$selectProductTypes);

    }


    }


    public function register()
    {
        //
    }
}
