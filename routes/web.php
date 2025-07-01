<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/completar-cadastro', [SiteController::class, 'fillRegister']);

Route::get('/parabens', [SiteController::class, 'congratulations']);

