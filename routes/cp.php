<?php

use Illuminate\Support\Facades\Route;

Route::get('statamic.cp.store.index', function () {
    return view('statamic::colors');
})->name('store.index');
