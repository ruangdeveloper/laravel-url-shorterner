<?php

use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UrlController::class, 'index'])->name('url.index');
Route::post('/', [UrlController::class, 'store'])->name('url.store');
Route::get('/{alias}', [UrlController::class, 'redirect'])->name('url.redirect');
