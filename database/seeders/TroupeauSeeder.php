<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TroupeauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('troupeaus')->insert([
          [
            'id' => 1,
            'effectif' => 250,
            'eleveur_id' => 1
          ],
          [
            'id' => 2,
            'effectif' => 98,
            'eleveur_id' => 2
          ],
          [
            'id' => 3,
            'effectif' => 46,
            'eleveur_id' => 3
          ],
        ]);
    }
}
