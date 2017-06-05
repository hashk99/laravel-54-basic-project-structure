<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('user_roles')->insert([
            'id' => 1,
            'role' => 'SUPER_ADMIN' 
        ]);

       	DB::table('user_roles')->insert([
            'id' => 2,
            'role' => 'REVIEW_ADMIN_LEADER' 
        ]);

       	DB::table('user_roles')->insert([
            'id' => 3,
            'role' => 'REVIEW_ADMIN' 
        ]);

       	DB::table('user_roles')->insert([
            'id' => 4,
            'role' => 'DOCTOR' 
        ]);

       	DB::table('user_roles')->insert([
            'id' => 5,
            'role' => 'RESEARCHER' 
        ]);
    }
}
