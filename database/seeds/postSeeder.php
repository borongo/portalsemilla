<?php

use App\Post;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0;$i<=100;$i++){
            $AppUser=Post::create([
                'id_user'=>$faker->numberBetween(1,100),
                'title'=>$faker->realText(50),
                'body'=>$faker->realText(200),
                'likes'=>$faker->numberBetween(1,100),
            ]);
        }
    }

}
