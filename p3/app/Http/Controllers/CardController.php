<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Card; # Make our Card Model accessible

class CardController extends Controller
{
    public function index() {

        $cards = Card::orderBy('id')->get();

        return view('cards/index', ['cards' => $cards]);
    }

    public function create() {
        return view('/cards/create');
    }
}
