<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    // RETRIEVE ALL JOB OPENINGS AND DISPLAY THEM IN A VIEW
    public function index()
    {
        $jobOpenings = JobOpening::latest()->get();
        return view('admin.career.index', compact('jobOpenings'));
    }

    // VALIDATE AND STORE A NEW JOB OPENING
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|in:full-time,part-time,contract',
        ]);

        $career = new JobOpening();
        $career->title = $request->title;
        $career->description = $request->description;
        $career->location = $request->location;
        $career->type = $request->type;

        $career->save();

        return redirect()->route('admin.careers.index')->with('success', 'Job opening created successfully!');
    }

    // FIND A SPECIFIC JOB OPENING AND SHOW THE EDIT FORM
    public function edit($id)
    {
        $career = JobOpening::findOrFail($id);
        $isEdit = true;
        return view('admin.career.view-edit', compact('career', 'isEdit'));
    }

    // VIEW A SPECIFIC JOB OPENING
    public function view($id)
    {
        $career = JobOpening::findOrFail($id);
        $isEdit = false;
        return view('admin.career.view-edit', compact('career', 'isEdit'));
    }

    // UPDATE A JOB OPENING'S DETAILS
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|in:full-time,part-time,contract',
        ]);

        $career = JobOpening::findOrFail($request->id);

        $career->title = $request->title;
        $career->description = $request->description;
        $career->location = $request->location;
        $career->type = $request->type;

        $career->save();

        return redirect()->route('admin.careers.index')->with('success', 'Job opening updated successfully!');
    }

    // UPDATE JOB OPENING STATUS (ACTIVE OR BLOCKED)
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:job_openings,id',
            'status' => 'required|in:active,blocked',
        ]);

        $career = JobOpening::findOrFail($request->id);

        $career->update(['status' => $request->status]);

        return response()->json(['message' => 'Job opening status updated successfully']);
    }

    // DELETE A JOB OPENING
    public function destroy($id)
    {
        $career = JobOpening::findOrFail($id);
        $career->delete();

        return redirect()->route('admin.careers.index')->with('success', 'Job opening deleted successfully!');
    }
}
