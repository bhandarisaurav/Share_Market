<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => ("Admin"),
            'email' => ('admin@gmail.com'),
            'remember_token' => ('f2ugoQTtu1vB2ZTJS76sm5HHwlMQAsILXs9FW0xJliVHVUyQwTNX3kHOqsg8sPHr9'),
            'password' => ("admin"),
        ]);
    }
}
