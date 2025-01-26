<?php

use App\Http\Controllers\Admin\RouteManageController;
use Illuminate\Support\Facades\Route;

$routeName = 'admin';
Route::prefix($routeName)->group(function ($routeName) {
    Route::controller(RouteManageController::class)->group(function () use ($routeName) {
        Route::get('/', 'index')->name($routeName . '.index');
        Route::get('/login', 'login')->name($routeName . '.login');
        Route::get('/forget', 'forget')->name($routeName . '.forget');
        Route::get('/reset', 'reset')->name($routeName . '.reset');
    });
});
