<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Card; # Make our Card Model accessible

class CardController extends Controller
{
    public function index() {

        # Load our book data using PHP's file_get_contents
        # We specify our books.json file path using Laravel's database_path helper
        $cardsData = file_get_contents(database_path('cards.json'));

        # Convert the string of JSON text we loaded from books.json into an
        # array using PHP's built-in json_decode function
        $cards = json_decode($cardsData, true);

        # Alphabetize the books
        $cards = Arr::sort($cards, function ($value) {
            return $value['question'];
        });

        return view('cards/index', ['cards' => $cards]);
    }

    public function create() {
        return view('/cards/create');
    }
}
