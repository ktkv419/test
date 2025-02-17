<?php

use App\Http\Controllers\GoodbyeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/goodbye', [GoodbyeController::class, 'goodbye'])->name('goodbye');