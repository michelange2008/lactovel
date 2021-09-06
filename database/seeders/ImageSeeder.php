<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();

        DB::table('images')->insert([
          [
            'id' => 1,
            'url' => 'saanen.jpg',
            'imageable_id' => 2,
            'imageable_type' => "App\Models\Race",
          ],
          [
            'id' => 2,
            'url' => 'alpine.jpg',
            'imageable_id' => 1,
            'imageable_type' => "App\Models\Race",
          ],
          [
            'id' => 3,
            'url' => 'massif_central.jpg',
            'imageable_id' => 3,
            'imageable_type' => "App\Models\Race",
          ],
          [
            'id' => 4,
            'url' => 'rove.jpg',
            'imageable_id' => 5,
            'imageable_type' => "App\Models\Race",
          ],
          [
            'id' => 5,
            'url' => 'croisee.jpg',
            'imageable_id' => 6,
            'imageable_type' => "App\Models\Race",
          ],
          [
            'id' => 7,
            'url' => 'saanen.jpg',
            'imageable_id' => 15,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 8,
            'url' => 'saanen.jpg',
            'imageable_id' => 16,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 9,
            'url' => 'saanen.jpg',
            'imageable_id' => 17,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 10,
            'url' => 'saanen.jpg',
            'imageable_id' => 18,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 11,
            'url' => 'saanen.jpg',
            'imageable_id' => 19,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 12,
            'url' => 'saanen.jpg',
            'imageable_id' => 20,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 13,
            'url' => 'saanen.jpg',
            'imageable_id' => 21,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 14,
            'url' => 'saanen.jpg',
            'imageable_id' => 22,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 15,
            'url' => 'saanen.jpg',
            'imageable_id' => 23,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 16,
            'url' => 'alpine.jpg',
            'imageable_id' => 1,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 17,
            'url' => 'alpine.jpg',
            'imageable_id' => 24,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 18,
            'url' => 'alpine.jpg',
            'imageable_id' => 25,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 19,
            'url' => 'alpine.jpg',
            'imageable_id' => 26,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 20,
            'url' => 'alpine.jpg',
            'imageable_id' => 27,
            'imageable_type' => "App\Models\Chevre",
          ],
          [
            'id' => 21,
            'url' => 'provencale.jpg',
            'imageable_id' => 5,
            'imageable_type' => "App\Models\Race",
          ],
        ]);
    }
}
