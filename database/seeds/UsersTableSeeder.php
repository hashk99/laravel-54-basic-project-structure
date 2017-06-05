<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('users')->insert([
            'full_name' => 'Admin User',
            'email' => 'admin@xyz.com',
            'password' => bcrypt('secret'),
            'user_role_id' => 1,
            'active' => 1 
        ]);

       	DB::table('users')->insert([
            'full_name' => 'Review LEADER Admin User',
            'email' => 'rladmin@xyz.com',
            'password' => bcrypt('secret'),
            'user_role_id' => 2,
            'active' => 1 
        ]);
       	DB::table('users')->insert([
            'full_name' => 'Review Admin User',
            'email' => 'radmin@xyz.com',
            'password' => bcrypt('secret'),
            'user_role_id' => 3,
            'active' => 1 
        ]);
       	DB::table('users')->insert([
            'full_name' => 'Doctor User',
            'email' => 'doctor@xyz.com',
            'password' => bcrypt('secret'),
            'user_role_id' => 4,
            'active' => 1 
        ]);

       	DB::table('users')->insert([
            'full_name' => 'Research User',
            'email' => 'researcher@xyz.com',
            'password' => bcrypt('secret'),
            'user_role_id' => 5,
            'active' => 1 
        ]);
    }
}
 