<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StudyController;

// Pages
Route::get('/', [PageController::class, 'index']);
Route::get('/404', [PageController::class, 'notFound']);

// Decks
Route::get('/decks', [DeckController::class, 'index']);
Route::get('/decks/create', [DeckController::class, 'create']);

// Cards
Route::get('/cards', [CardController::class, 'index']);
Route::get('/cards/create', [CardController::class, 'create']);

// Study
Route::get('/study', [StudyController::class, 'index']);
