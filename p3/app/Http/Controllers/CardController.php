<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Card; # Make our Card Model accessible

class CardController extends Controller
{
    public function index() {

        $cards = Card::orderBy('updated_at', 'desc')->get();

        return view('cards/index', ['cards' => $cards]);
    }

    public function create() {
        return view('/cards/create');
    }


    /**
     * POST /cards
     * Process the form for adding a new card
     */
    public function store(Request $request) {

        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'cover_url' => 'url',
        ]);

        $card = new Card();
        $card->question = $request->question;
        $card->answer = $request->answer;
        $card->cover_url = $request->cover_url;

        // Generate the slug. convert the name string to a slug string and append a random number to it.
        $card->slug = strtolower(trim(preg_replace('/[\s-]+/', '_', preg_replace('/[^A-Za-z0-9-]+/', '_', preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $request->question))))), '_')) . rand(0, 99999);

        // Save card.
        $card->save();

        return redirect('/cards');
    }


    /**
     * GET /cards/{slug}
     * Show card page
     */
    public function show($slug)
    {
        $card = Card::find($slug);

        if (!$card) {
            return redirect('/404')->with(['missing-item-message' => 'Card not found']);
        }

        return view('cards/show', [
            'card' => $card,
        ]);
    }

    /**
     * GET /cards/{slug}/edit
     */
    public function edit(Request $request, $slug)
    {
        $card = Card::find($slug);

        if (!$card){
            return redirect('/404')->with(['missing-item-message' => 'Card not found']);
        }

        return view('cards/edit', ['card' => $card]);
    }
}
