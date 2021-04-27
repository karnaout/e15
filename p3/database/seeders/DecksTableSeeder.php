<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Deck; # Make our Deck Model accessible

class DecksTableSeeder extends Seeder
{
    /**
     * Our run method
     */
    public function run()
    {
        $this->decksFromJson();
    }

    /**
     * Add a deck
     */
    private function decksFromJson()
    {
        $deckData = file_get_contents(database_path('decks.json'));
        $decks = json_decode($deckData, true);

        $count = count($decks);
        foreach ($decks as $slug => $deckData) {
            $deck = new Deck();

            $deck->created_at = Carbon::now();
            $deck->updated_at = Carbon::now();
            $deck->slug = $slug;
            $deck->name = $deckData['name'];
            $deck->description = $deckData['description'];

            $deck->save();
            $count--;
        }
    }

}
