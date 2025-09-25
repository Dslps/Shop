<?php

use App\Http\Controllers\GridController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GridController::class,'index'])->name('index');

Route::post('/api/grid-tiles', [GridController::class, 'loadTiles']);