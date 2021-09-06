<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Race extends Model
{

    protected $guarded=[];

    public $timestamps = false;

    public function Chevres(): HasMany
    {
      return $this->hasMany(Chevre::class);
    }

    public function Troupeaus(): BelongsToMany
    {
      return $this->belongsToMany(Troupeau::class);
    }

    public function image()
    {
      return $this->morphOne(Image::class, 'imageable');
    }
}
