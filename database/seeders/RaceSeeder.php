<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([

            [
              'id' => 1,
              'name' => "Alpine"
            ],
            [
              'id' => 2,
              'name' => "Saanen"
            ],
            [
              'id' => 3,
              'name' => "Massif Central"
            ],
            [
              'id' => 4,
              'name' => "Provençale"
            ],
            [
              'id' => 5,
              'name' => "Rove"
            ],
            [
              'id' => 6,
              'name' => "Croisée"
            ],

        ]);
    }
}
