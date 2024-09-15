<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(){
        $teams = Team::get();
        return view('admin.team.index',compact('teams'));
    }
}
