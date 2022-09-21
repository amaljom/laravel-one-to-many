<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use App\User;
class PostsTableSeeder extends Seeder


{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $Users=User::all();
        foreach($Users as $user){
            for ($i=0; $i < 10 ; $i++) { 
                $newPost= new Post();
                $newPost->user_id =$user->id;
                $newPost->title = $faker->realText(40);
                $newPost->post_content = $faker->realText();
                $newPost->post_image = $faker->imageUrl(30);
                $newPost->post_date = $faker->dateTime();
                $newPost->save();
            }
        }
    }
}
