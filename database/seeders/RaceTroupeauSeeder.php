<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RaceTroupeauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('race_troupeau')->insert([
          ['race_id' => 1, 'troupeau_id' => 1],
          ['race_id' => 2, 'troupeau_id' => 1],
          ['race_id' => 3, 'troupeau_id' => 1],
          ['race_id' => 4, 'troupeau_id' => 2],
          ['race_id' => 5, 'troupeau_id' => 2],
          ['race_id' => 2, 'troupeau_id' => 3],
          ['race_id' => 4, 'troupeau_id' => 3],
        ]);
    }
}
