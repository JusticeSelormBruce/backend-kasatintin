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
        $faker = new Faker();
        factory(User::class, 1)->create();
        factory(Post::class, 5)->create();
        factory(Category::class, 6)->create();
        factory(Tag::class,5)->create();
        factory(Image::class,10)->create();
        factory(Video::class,10)->create();
        factory(Comment::class,20)->create();
        // DB::table('posts_tags')->insert(
        //     [
        //         'post_id' =>$faker->numberBetween(1,5),
        //         'tag_id' =>$faker->numberBetween(1,5),

        //     ]
        // );


        $this->call(UserSeeder::class);
    }
}
