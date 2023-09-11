<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use App\Models\Github\GithubApiData;
use App\Models\Github\GithubWrapper;
use Cristal\ApiWrapper\Transports\Transport;
use Curl\Curl;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
