<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
     public function index()
    {
        $teams = Team::all();
    	return view('teams.index')->with('teams', $teams);
    }
     public function create()
    {
    	return view('teams.create');
    }
}
