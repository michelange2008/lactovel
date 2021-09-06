<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      [
          'id' => 1,
          'name' => "Michel BOUY",
          'email' => "michel.bouy@fibl.org",
          'password' => bcrypt('17891789Mm'),
          'isAdmin' => true,
      ],
      [
        'id' => 2,
        'name' => "Marjorie PALLAIS",
        'email' => "mp@email.fr",
        'password' => bcrypt('lacto'),
        'isAdmin' => false,
      ],
      [
        'id' => 3,
        'name' => "EARL les Pampilles",
        'email' => "pamp@email.fr",
        'password' => bcrypt('lacto'),
        'isAdmin' => false,
      ],
      [
        'id' => 4,
        'name' => "Franz et Emilie BRUGIERE",
        'email' => "feb@email.fr",
        'password' => bcrypt('lacto'),
        'isAdmin' => false,
      ],
    ]);
  }
}
