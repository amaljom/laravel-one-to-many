<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
class PostsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newPost= new Post();
            $newPost->author = $faker->realText(30);
            $newPost->title = $faker->realText();
            $newPost->post_content = $faker->realText();
            $newPost->post_image = $faker->imageUrl(30);
            $newPost->post_date = $faker->dateTime();
            $newPost->save();
        }
    }
}
