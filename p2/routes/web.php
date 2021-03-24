<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/play', [ObjectController::class, 'play']);
Route::get('/404', [ObjectController::class, 'notFound']);

Route::get('/objects', [ObjectController::class, 'index']);
Route::get('/objects/{slug}', [ObjectController::class, 'show']);
Route::get('/findObject', [ObjectController::class, 'findObject']);
