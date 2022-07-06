<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 9; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence();
            $post->description = $faker->paragraph(10, false);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
