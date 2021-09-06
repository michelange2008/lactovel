<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Troupeau extends Model
{

    public $timestamps = false;

    public function eleveur(): BelongsTo
    {
      return $this->belongsTo(Eleveur::class);
    }

    public function chevres(): HasMany
    {
      return  $this->hasMany(Chevre::class);
    }

    public function races(): BelongsToMany
    {
      return $this->belongsToMany(Race::class);
    }
}
