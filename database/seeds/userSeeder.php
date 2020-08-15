<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
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
            $AppUser=User::create([
                'name'=>$faker->name,
                'email'=>$faker->unique()->safeEmail(),
                'rut'=>$faker->numberBetween(1000000,9999999),
                'password'=>Hash::make('password'),
                'school' =>$faker->text(50)
            ]);
        }
        User::create([
            'name'=>'Cristobal Avila',
            'email'=>'krizth2307@gmail.com',
            'rut'=>'123123123',
            'password'=>Hash::make('password'),
            'school' =>$faker->text(50)
        ]);
    }

}
