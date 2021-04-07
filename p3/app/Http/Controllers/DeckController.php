<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Deck; # Make our Deck Model accessible

class DeckController extends Controller
{
    public function index() {

        # Load our book data using PHP's file_get_contents
        # We specify our books.json file path using Laravel's database_path helper
        $decksData = file_get_contents(database_path('decks.json'));

        # Convert the string of JSON text we loaded from books.json into an
        # array using PHP's built-in json_decode function
        $decks = json_decode($decksData, true);

        # Alphabetize the books
        $decks = Arr::sort($decks, function ($value) {
            return $value['name'];
        });

        return view('decks/index', ['decks' => $decks]);
    }

    public function create() {
        return view('decks/create');
    }
}
