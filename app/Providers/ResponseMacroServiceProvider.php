<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{

    public function boot(ResponseFactory $factory)
    {
    }

    public function register()
    {
        //
    }

}
