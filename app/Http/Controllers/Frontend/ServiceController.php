<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('status', 'active')->get();
        return view('site.service', compact('testimonials'));
    }
}
