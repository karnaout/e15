<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Card; # Make our Card Model accessible

class CardsTableSeeder extends Seeder
{
    /**
     * Our run method
     */
    public function run()
    {
        $this->cardsFromJson();
    }

    /**
     * Add a card
     */
    private function cardsFromJson()
    {
        $cardData = file_get_contents(database_path('cards.json'));
        $cards = json_decode($cardData, true);

        $count = count($cards);
        foreach ($cards as $slug => $cardData) {
            $card = new Card();

            $card->created_at = Carbon::now();
            $card->updated_at = Carbon::now();
            $card->slug = $slug;
            $card->question = $cardData['question'];
            $card->answer = $cardData['answer'];
            $card->cover_url = $cardData['cover_url'];

            $card->save();
            $count--;
        }
    }

}
