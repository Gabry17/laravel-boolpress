<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'antipasti',
            'primi',
            'secondi',
            'dolci'
        ];

        foreach ($categories as $item) {
           $new_categories = new Category();
           $new_categories->name = $item;
           $new_categories->slug = Str::slug($item, '-');
           $new_categories->save();
        }
    }
}
