<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cartalyst\Sentinel\Roles\EloquentRole;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //credentials for user
        $admin = [
            'email'    => 'admin@bloodfinder.com',
            'password' => 'bloodfinder',
            'first_name' => 'leepak'
        ];

        //Register and Activate the user
        $adminUser = Sentinel::registerAndActivate($admin);

        //Give role to the user
        $adminRole = EloquentRole::where('slug','admin')->first();
        $adminRole->users()->attach($adminUser);

    }
}
