<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Antar Nandi',
                'email' => 'antar@gmail.com',
                'password' => md5('12345678'),
                'role' => 'Admin'
            ]
        );
    }
}
