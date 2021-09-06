<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class ChevreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('chevres')->insert([
        [
          'numero' => '45000',
          'name' => Str::random(10),
          'troupeau_id' => 1,
          'race_id' => 2,
        ],
        [
          'numero' => '42000',
          'name' => Str::random(10),
          'troupeau_id' => 1,
          'race_id' => 2,
        ],
        [
          'numero' => '34123',
          'name' => Str::random(10),
          'troupeau_id' => 1,
          'race_id' => 2,
        ],
        [
          'numero' => '98765',
          'name' => Str::random(10),
          'troupeau_id' => 1,
          'race_id' => 2,
        ],
        [
          'numero' => '56789',
          'name' => Str::random(10),
          'troupeau_id' => 1,
          'race_id' => 2,
        ],
        [
          'numero' => '12345',
          'name' => Str::random(10),
          'troupeau_id' => 2,
          'race_id' => 2,
        ],
        [
          'numero' => '23000',
          'name' => Str::random(10),
          'troupeau_id' => 2,
          'race_id' => 2,
        ],
        [
          'numero' => '55000',
          'name' => Str::random(10),
          'troupeau_id' => 2,
          'race_id' => 2,
        ],
        [
          'numero' => '45220',
          'name' => Str::random(10),
          'troupeau_id' => 2,
          'race_id' => 2,
        ],
        [
          'numero' => '45222',
          'name' => Str::random(10),
          'troupeau_id' => 3,
          'race_id' => 1,
        ],
        [
          'numero' => '34521',
          'name' => Str::random(10),
          'troupeau_id' => 3,
          'race_id' => 1,
        ],
        [
          'numero' => '45854',
          'name' => Str::random(10),
          'troupeau_id' => 3,
          'race_id' => 1,
        ],
        [
          'numero' => '45855',
          'name' => Str::random(10),
          'troupeau_id' => 3,
          'race_id' => 1,
        ],

      ]);
    }
}
