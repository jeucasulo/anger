<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name="admin";
        $role->label="Admin";
        $role->save();

        $role = new Role();
        $role->name="manager";
        $role->label="Manager";
        $role->save();

        $role = new Role();
        $role->name="guest";
        $role->label="Guest";
        $role->save();

    }
}
