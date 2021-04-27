<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Deck;

class CardDeckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deck = Deck::where('slug', '=', 'objects')->first();

        $cards = ['id-1', 'id-2', 'id-3'];

        foreach ($cards as $slug) {
            $card = Card::where('slug', '=', $slug)->first();
            $deck->cards()->save($card);
        }
    }
}
