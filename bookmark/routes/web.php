<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

/**
 * Misc. Pages
 */
Route::get('/', [PageController::class, 'index']);
Route::get('/support', [PageController::class, 'support']);

/**
 * Book pages
 */
// Make sure the create route comes before `/books/{slug?}` so it takes precedence
Route::get('/books/create', [BookController::class, 'create']);

// Note the use of the post method in this route
Route::post('/books', [BookController::class, 'store']);


Route::get('/books', [BookController::class, 'index']);
Route::get('/search', [BookController::class, 'search']);
Route::get('/books/{slug}', [BookController::class, 'show']);
Route::get('/list', [BookController::class, 'list']);

# Original /search route that was used to demonstrate working with multiple route parameters
// Route::get('/search/{category}/{subcategory}', [BookController::class, 'search']);