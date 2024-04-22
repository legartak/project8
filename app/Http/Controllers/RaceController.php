<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function show($id)
    {
        $race = Race::findOrFail($id);
        $drivers = $race->drivers()->orderBy('points', 'desc')->get();
        return view('race.show', ['race' => $race, 'drivers' => $drivers]);
    }

    public function index()
    {
        $races = Race::all();
        return view('races.index', ['races' => $races]);
    }
}
