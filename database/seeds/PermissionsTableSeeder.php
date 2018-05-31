<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->name="create_user";
        $permission->label="Create user";
        $permission->save();
        
        $permission = new Permission();
        $permission->name="read_user";
        $permission->label="Read user";
        $permission->save();

        $permission = new Permission();
        $permission->name="update_user";
        $permission->label="Edit user";
        $permission->save();

        $permission = new Permission();
        $permission->name="delete_user";
        $permission->label="Delete user";
        $permission->save();

    }
}
