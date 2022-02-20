<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PharmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmaceuticals')->insert(
            [
                'name' => 'Beximco',
                'address' => 'Dhaka',
               
            ]
        );
    }
}
