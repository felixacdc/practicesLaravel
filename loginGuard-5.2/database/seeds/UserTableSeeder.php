<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Administrator;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'felix';
        $user->email = 'felix@felix';
        $user->password = bcrypt('12345678');
        $user->save();

        $userAdmin = new Administrator;
        $userAdmin->name = 'pablo';
        $userAdmin->email = 'pablo@pablo';
        $userAdmin->password = bcrypt('12345678');
        $userAdmin->save();
    }
}
