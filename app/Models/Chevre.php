<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chevre extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function run()
    {
      Chevre::factory()->count(50)->hasTroupeaus(1)->create();
    }

    public function Troupeau(): BelongsTo
    {
      return $this->belongsTo(Troupeau::class);
    }

    public function Race(): BelongsTo
    {
      return $this->belongsTo(Race::class);
    }

    public function image()
    {
      return $this->morphOne(Image::class, 'imageable');
    }
}
