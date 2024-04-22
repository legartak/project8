<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Foundation\Application;

class DriverController extends Controller
{
    public function show($id)
    {
        $driver = Driver::with('races')->findOrFail($id);
        return view('driver.show', ['driver' => $driver]);
    }

    public function getDriversByTeam($teamId)
    {
        return Driver::where('team_id', $teamId)->get();
    }
}
