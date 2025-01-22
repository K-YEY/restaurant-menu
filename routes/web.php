<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/thanks', function () {
    return view('frontend.thanks');
})->name('thanks');
