<?php

use App\Category;
use App\Comment;
use App\Image;
use App\Post;
use App\Tag;
use App\User;
use App\Video;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
   
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = new Faker();
        factory(User::class, 100)->create();
        factory(Post::class, 1500)->create();
        factory(Category::class, 6)->create();
        factory(Tag::class,50)->create();
        factory(Image::class,2500)->create();
        factory(Video::class,500)->create();
        factory(Comment::class,2500)->create();
        // DB::table('posts_tags')->insert(
        //     [
        //         'post_id' =>$faker->numberBetween(1,1500),
        //         'tag_id' =>$faker->numberBetween(1,1500),

        //     ]
        // );


        // $this->call(UserSeeder::class);
    }
}
