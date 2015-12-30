<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@foobarinc.com',
            'password' => bcrypt('password'),
        ]);

        // Project Manager
        DB::table('users')->insert([
            'name' => 'Project Manager',
            'email' => 'pm@foobarinc.com',
            'password' => bcrypt('password'),
        ]);

        // Team Leader
        DB::table('users')->insert([
            'name' => 'Team Leader',
            'email' => 'tl@foobarinc.com',
            'password' => bcrypt('password'),
        ]);

        // Programmer
        DB::table('users')->insert([
            'name' => 'Programmer',
            'email' => 'pg@foobarinc.com',
            'password' => bcrypt('password'),
        ]);
    }
}
