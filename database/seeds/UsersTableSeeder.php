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
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'hridoy',
            'email' => 'hridoy@gmail.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Athor',
            'username' => 'athorhridoy',
            'email' => 'authorhridoy@gmail.com',
            'password' => bcrypt('rootathor'),
        ]);
    }
}
