<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StudyController;

// Pages
Route::get('/', [PageController::class, 'index']);

// Decks
Route::get('/decks', [DeckController::class, 'index']);

// Cards
Route::get('/cards', [CardController::class, 'index']);

// Study
Route::get('/study', [StudyController::class, 'index']);
