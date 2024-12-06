<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teams = Team::where('status', 'active')->get();
        return view('site.about', compact('teams'));
    }
}
