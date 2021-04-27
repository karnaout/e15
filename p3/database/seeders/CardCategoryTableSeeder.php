<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Category;

class CardCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', '=', 'objects')->first();

        $cards = ['id-1', 'id-3'];

        foreach ($cards as $slug) {
            $card = Card::where('slug', '=', $slug)->first();
            $category->cards()->save($card);
        }
    }
}
