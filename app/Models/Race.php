<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Race extends Model
{
    protected $fillable = ['name', 'date'];

    public function drivers(): BelongsToMany
    {
        return $this->belongsToMany(Driver::class, 'driver_race')->withPivot('points');
    }
}
