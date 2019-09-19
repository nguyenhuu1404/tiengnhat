<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use App\FormFields\SelectparentFormField;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Voyager::addAction(\App\Actions\MyAction::class);
        Voyager::addAction(\App\Actions\AnswerAction::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Voyager::addFormField(SelectparentFormField::class);
    }
}
