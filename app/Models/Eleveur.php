<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Eleveur extends Model
{

    public $timestamps = false;

    public function user(): BelongsTo
    {
      return $this->BelongsTo(User::class);
    }

    public function troupeau(): HasOne
    {
      return $this->hasOne(Troupeau::class);
    }
}
