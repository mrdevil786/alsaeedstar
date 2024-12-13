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
        $jobOpenings = JobOpening::where('status', 'active')->latest()->get();
        return view('site.career', compact('jobOpenings'));
    }

    public function show($id)
    {
        $job = JobOpening::where('id', $id)->where('status', 'active')->firstOrFail();
        return view('site.career-detail', compact('job'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:job_applications,email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'nullable|string|max:500',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'job_opening_id' => 'required|exists:job_openings,id',
        ]);

        $jobOpening = JobOpening::where('id', $request->job_opening_id)->where('status', 'active')->first();

        if (!$jobOpening) {
            return redirect()->route('frontend.career')->with('error', 'This job opening is no longer available.');
        }

        $resumePath = FileUploader::uploadFile($request->file('resume'), 'files/resumes');

        JobApplication::create([
            'job_opening_id' => $request->job_opening_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'resume' => $resumePath,
        ]);

        return redirect()->route('frontend.career')->with('success', 'Application submitted successfully.');
    }
}
