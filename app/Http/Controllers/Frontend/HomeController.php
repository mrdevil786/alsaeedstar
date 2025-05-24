<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'active')->latest()->limit(6)->get();
        $teams = Team::where('status', 'active')->get();
        $testimonials = Testimonial::where('status', 'active')->get();
        return view('site.home', compact('services', 'teams', 'testimonials'));
    }
}
