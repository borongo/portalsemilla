<?php

use App\Comment;
use Illuminate\Database\Seeder;

class commentSeeder extends Seeder
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
            $AppUser=Comment::create([
                'id_post'=>$faker->numberBetween(1,100),
                'id_user'=>$faker->numberBetween(1,100),
                'comment'=>$faker->realText(50),
                'likes'=>$faker->numberBetween(1,100),
            ]);
        }
    }
}
