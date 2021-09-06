<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          RoleSeeder::class,
          UserSeeder::class,
          RaceSeeder::class,
          EleveurSeeder::class,
          TroupeauSeeder::class,
          RaceTroupeauSeeder::class,
          ChevreSeeder::class,
          ImageSeeder::class,
        ]);
    }
}
