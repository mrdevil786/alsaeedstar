<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $jobOpenings = JobOpening::all();
        return view('site.career', compact('jobOpenings'));
    }

    public function show($id)
    {
        $job = JobOpening::findOrFail($id);
        return view('site.career-detail', compact('job'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'job_id' => 'required|exists:job_openings,id',
        ]);

        $resumePath = FileUploader::uploadFile($request->file('resume'), 'files/resumes');

        JobApplication::create([
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'resume' => $resumePath,
        ]);

        return redirect()->route('careers')->with('success', 'Application submitted successfully.');
    }
}
