<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EleveurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eleveurs')->insert([
          [
            'id' => 1,
            'user_id' => 2,
            'address_1' => "Les Patas",
            'address_2' => "",
            'cp' => "26750",
            'commune' => "Saint Paul lès Romans",
            'lat' => 45.063515,
            'long' => 5.150497,
            'installation' => null,
          ],
          [
            'id' => 2,
            'user_id' => 3,
            'address_1' => "Les Biroulis",
            'address_2' => "",
            'cp' => "26300",
            'commune' => "Alixan",
            'lat' => 44.99561,
            'long' => 5.01192,
            'installation' => '2008',
          ],
          [
            'id' => 3,
            'user_id' => 4,
            'address_1' => "Grand Val",
            'address_2' => "",
            'cp' => "07210",
            'commune' => "Saint Bauzille",
            'lat' => 44.66858,
            'long' => 4.67953,
            'installation' => '2006',
          ],
        ]);
    }
}
