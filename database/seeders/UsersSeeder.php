<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $users =[
            ['name' => 'Test User', 'email' => 'vasterra@vasterra.com', 'password' => Hash::make('123123123'), 'passport_number' => 'DF123456789', 'designation' => 'Director'],
            ['name' => 'Test User2', 'email' => 'vasterra2@vasterra.com', 'password' => Hash::make('123123123'), 'passport_number' => 'IE123456789', 'designation' => 'CEO'],
            ['name' => 'Test User3', 'email' => 'vasterra3@vasterra.com', 'password' => Hash::make('123123123'), 'passport_number' => 'MU987654321', 'designation' => 'CTO'],
        ];

        DB::table('users')->insert($users);
    }
}
