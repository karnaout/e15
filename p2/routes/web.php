<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);

Route::get('/objects', [ObjectController::class, 'index']);
Route::get('/object/{objectName}', [ObjectController::class, 'show']);
