<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        $this->defaultCategories();
    }

    /**
     * Create defualt categories
     */
    private function defaultCategories()
    {
        $categoryData = file_get_contents(database_path('categories.json'));
        $categories = json_decode($categoryData, true);

        $count = count($categories);
        foreach ($categories as $slug => $categoryData) {
            $category = new Category();

            $category->created_at = Carbon::now();
            $category->updated_at = Carbon::now();
            $category->slug = $slug;
            $category->title = $categoryData['title'];
            $category->description = $categoryData['description'];

            $category->save();
            $count--;
        }

    }

}
