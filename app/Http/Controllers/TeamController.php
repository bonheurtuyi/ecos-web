<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $categories = Category::all();
        return view('team', compact('teams', 'categories'));
    }
    public function show($id)
    {
        $id = Team::find($id);
        $member = $id->first();
        $categories = Category::all();
        return view('team-single', compact('member', 'categories'));
    }
}
