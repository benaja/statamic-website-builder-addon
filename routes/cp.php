<?php

use Illuminate\Support\Facades\Route;

Route::get('style/colors', function () {
    return view('statamic::colors');
})->name('style.colors');
