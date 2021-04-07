<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Deck; # Make our Deck Model accessible

class DecksTableSeeder extends Seeder
{
    /**
     * Our run method
     */
    public function run()
    {
        $this->addDeck();
    }

    /**
     * Add a deck
     */
    private function addDeck()
    {
        $deck = new Deck();
        $deck->slug = 'bedroom-items';
        $deck->name = 'Bedroom Items';
        $deck->description = 'A collection of items you might find in a bedroom';

        $deck->save();
    }

}
