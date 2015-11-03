<?php

namespace app\Blog\Services;

use App;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function register()
    {
        App::bind('App\\Blog\\Interfaces\\BlogInterface', 'App\\Blog\\Repository\\BlogRepository');
    }
}
