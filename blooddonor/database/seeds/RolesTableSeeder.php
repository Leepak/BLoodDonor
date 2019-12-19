<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Roles\EloquentRole;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin
        $role = new EloquentRole();
        $role->slug = "admin";
        $role->name = "Admin";
        $role->save();

        //User
        $role = new EloquentRole();
        $role->slug = 'user';
        $role->name = 'User';
        $role->save();
    }
}
