<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::where('status', 'active')->get();
        return view('site.home', compact('teams'));
    }
}
