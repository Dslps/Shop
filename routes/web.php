<?php

use App\Http\Controllers\GridController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [GridController::class,'index'])->name('index');
Route::post('/api/grid-tiles', [GridController::class, 'loadTiles']);
Route::get('/home', [HomeController::class, 'index'])->name('home');