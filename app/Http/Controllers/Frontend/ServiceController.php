<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'active')->latest()->get();
        $testimonials = Testimonial::where('status', 'active')->latest()->get();
        return view('site.service', compact('services', 'testimonials'));
    }

    public function hvac()
    {
        return view('site.hvac');
    }
}
