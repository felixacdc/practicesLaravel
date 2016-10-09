<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        for ($i = 0; $i < 50; $i++) {
            $user = new User;
            $user->name = $faker->firstName . ' ' . $faker->lastName;
            $user->email = $faker->unique()->email;
            $user->password = $faker->numberBetween($min = 20, $max = 40);
            $user->save();
        }
    }
}
