<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Deck; # Make our Deck Model accessible

class DeckController extends Controller
{
    public function index() {

        $decks = Deck::orderBy('updated_at', 'desc')->get();

        return view('decks/index', ['decks' => $decks]);
    }

    public function create() {
        return view('decks/create');
    }

    /**
     * POST /decks
     * Process the form for adding a new deck
     */
    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'max:1000'
        ]);

        $deck = new Deck();
        $deck->name = $request->name;
        $deck->description = $request->description;

        // Generate the slug. convert the name string to a slug string and append a random number to it.
        $deck->slug = strtolower(trim(preg_replace('/[\s-]+/', '_', preg_replace('/[^A-Za-z0-9-]+/', '_', preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $request->name))))), '_')) . rand(0, 99999);

        // Save deck.
        $deck->save();

        return redirect('/decks');
    }

    /**
     * GET /decks/{slug}
     * Show deck page
     */
    public function show($slug)
    {
        $deck = Deck::find($slug);

        if (!$deck) {
            return redirect('/404')->with(['missing-item-message' => 'Deck not found']);
        }

        return view('decks/show', [
            'deck' => $deck,
        ]);
    }

    /**
     * GET /decks/{slug}/edit
     */
    public function edit(Request $request, $slug)
    {
        $deck = Deck::find($slug);

        if (!$deck){
            return redirect('/404')->with(['missing-item-message' => 'Deck not found']);
        }

        return view('decks/edit', ['deck' => $deck]);
    }

    /**
     * PUT /decks
     */
    public function update(Request $request, $slug)
    {
        $deck = Deck::find($slug);

        $request->validate([
            'name' => 'required',
            'description' => 'max:1000'
        ]);

        $deck->name = $request->name;
        $deck->description = $request->description;

        // Update deck
        $deck->save();

        return redirect('/decks/'.$deck->slug);
    }
}
