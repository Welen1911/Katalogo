<?php

use App\Http\Controllers\LojaController;
use Illuminate\Support\Facades\Route;

Route::resource('lojas', LojaController::class)
    ->middleware(['auth', 'verified'])
    ->except(['edit', 'update', 'destroy']);
