<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function show($teamId)
    {
        $team = Team::findOrFail($teamId);
        $driverController = new DriverController();
        $drivers = $driverController->getDriversByTeam($teamId);
        return view('team.show', ['team' => $team, 'drivers' => $drivers]);
    }
}
