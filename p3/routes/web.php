<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StudyController;

/******  Pages ********/
Route::get('/', [PageController::class, 'index']);
Route::get('/profile', [PageController::class, 'profile'])->middleware('auth');
Route::get('/404', [PageController::class, 'notFound']);

/******  Decks ********/
Route::get('/decks', [DeckController::class, 'index']);
Route::get('/decks/create', [DeckController::class, 'create']);
Route::post('/decks', [DeckController::class, 'store']);
Route::get('/decks/{slug}', [DeckController::class, 'show']);

// Decks - Update
Route::get('/decks/{slug}/edit', [DeckController::class, 'edit']);
Route::put('/decks/{slug}', [DeckController::class, 'update']);


/******  Cards ********/
Route::get('/cards', [CardController::class, 'index']);
Route::get('/cards/create', [CardController::class, 'create']);
Route::post('/cards', [CardController::class, 'store']);
Route::get('/cards/{slug}', [CardController::class, 'show']);
Route::get('/cards/{slug}/edit', [CardController::class, 'edit']);
Route::put('/cards/{slug}', [CardController::class, 'update']);


/******  Study ********/
Route::get('/study', [StudyController::class, 'index']);

// Memorize Card
Route::get('/memorize-cards', [StudyController::class, 'index']);

// Trivia
Route::get('/trivia', [StudyController::class, 'index']);
