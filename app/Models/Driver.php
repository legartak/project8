<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Driver extends Model
{
    protected $fillable = ['name', 'country', 'team_id', 'age', 'image'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function races(): BelongsToMany
    {
        return $this->belongsToMany(Race::class, 'driver_race')->withPivot('points');
    }
}
