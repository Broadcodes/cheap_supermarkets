<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('supermarket.index');
})->name('apphome');

Route::resource('supermarket', "SupermarketController" );

Route::get('{any?}', function () {
    return redirect()->route('apphome');
})->where('any', '.*');
