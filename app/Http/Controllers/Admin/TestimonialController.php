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
        $testimonials = Testimonial::latest()->get();
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
            $avatarPath = FileUploader::uploadFile($request->file('avatar'), 'images/testimonial-image');
        }

        Testimonial::create([
            'avatar' => $avatarPath,
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $isEdit = true;
        return view('admin.testimonial.edit', compact('testimonial', 'isEdit'));
    }

    public function view($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $isEdit = false;
        return view('admin.testimonial.edit', compact('testimonial', 'isEdit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        if ($request->hasFile('avatar')) {
            $testimonial->avatar = FileUploader::uploadFile($request->file('avatar'), 'images/testimonial-image', $testimonial->avatar);
        }
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial Updated Successfully');
    }

    // UPDATE TESTIMONIAL'S STATUS (ACTIVE OR BLOCKED)
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:testimonials,id',
            'status' => 'required|in:active,blocked',
        ]);

        $testimonial = Testimonial::findOrFail($request->id);
        $testimonial->update(['status' => $request->status]);

        return response()->json(['message' => 'Testimonial status updated successfully']);
    }
}
