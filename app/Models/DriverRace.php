<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverRace extends Model
{
    protected $table = 'DriverRace';

    protected $fillable = ['driver_id', 'race_id', 'points'];
}
