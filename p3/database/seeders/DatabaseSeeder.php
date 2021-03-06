<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CardsTableSeeder::class);
        $this->call(DecksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CardDeckTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CardCategoryTableSeeder::class);
    }
}
