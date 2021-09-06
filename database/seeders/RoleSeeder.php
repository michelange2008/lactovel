<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          [
            'id' => 1,
            'name' => 'admin',
            'isAdmin' => true,
            'isEleveur' => false,
          ],
          [
            'id' => 2,
            'name' => 'eleveur',
            'isAdmin' => false,
            'isEleveur' => true,
          ],
          [
            'id' => 3,
            'name' => 'autre',
            'isAdmin' => false,
            'isEleveur' => false,
          ],

        ]);
    }
}
