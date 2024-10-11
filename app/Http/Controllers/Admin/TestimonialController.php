<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);

        if ($request->hasFile('avatar')) {
            $avatarPath = FileUploader::uploadFile($request->file('avatar'), 'images/testimonioal-image');
        }

        Testimonial::create([
            'avatar' => $avatarPath,
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }
}
