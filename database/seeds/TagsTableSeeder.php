<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'insalata di mare',
            'impepata di cozze',
            'spaghetto allo scoglio',
            'pennette agli scampi',
            'tagliata di tonno',
            'polpo con vellutata di patate'
        ];

        foreach ($tags as $item) {
            $new_tag = new Tag();
            $new_tag -> name = $item;
            $new_tag -> slug = Str::slug($item);
            $new_tag -> save();
        }

    }
}
