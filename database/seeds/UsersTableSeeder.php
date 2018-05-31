<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name="JeuJunior";
        $user->email="jeucasulo@hotmail.com";
        $user->password=bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name="Artur";
        $user->email="admin@email.com";
        $user->password=bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name="Gustavo";
        $user->email="guest@email.com";
        $user->password=bcrypt('123456');
        $user->save();

    }
}
