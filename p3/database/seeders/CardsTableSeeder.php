<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Card; # Make our Card Model accessible

class CardsTableSeeder extends Seeder
{
    /**
     * Our run method
     */
    public function run()
    {
        $this->addCard();
    }

    /**
     * Add a card
     */
    private function addCard()
    {
        $card = new Card();
        $card->slug = 'febreze-car-air-freshner';
        $card->question = 'To bring fresh scents to your car.';
        $card->answer = 'Febreze Car Air Freshner';
        $card->cover_url = 'https://images-na.ssl-images-amazon.com/images/I/91rodEqi6KL._AC_SX679_.jpg';

        $card->save();
    }

}
