<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function index()
    {
        $applications = JobApplication::with('jobOpening')->latest()->get();
        return view('admin.submission.index', compact('applications'));
    }

    public function create()
    {
        $jobOpenings = JobOpening::all();
        return view('admin.submission.create', compact('jobOpenings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_opening_id' => 'required|exists:job_openings,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $application = new JobApplication();
        $application->job_opening_id = $request->job_opening_id;
        $application->name = $request->name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->message = $request->message;

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $application->resume = $resumePath;
        }

        $application->save();

        return redirect()->route('admin.applications.index')->with('success', 'Job application submitted successfully!');
    }

    public function edit($id)
    {
        $application = JobApplication::findOrFail($id);
        $jobOpenings = JobOpening::all();
        $isEdit = true;
        return view('admin.submission.view-edit', compact('application', 'jobOpenings', 'isEdit'));
    }

    public function view($id)
    {
        $application = JobApplication::with('jobOpening')->findOrFail($id);
        $isEdit = false;
        return view('admin.submission.view-edit', compact('application', 'isEdit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'job_opening_id' => 'required|exists:job_openings,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $application = JobApplication::findOrFail($id);
        $application->job_opening_id = $request->job_opening_id;
        $application->name = $request->name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->message = $request->message;

        if ($request->hasFile('resume')) {
            if ($application->resume && file_exists(storage_path('app/public/' . $application->resume))) {
                unlink(storage_path('app/public/' . $application->resume));
            }
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $application->resume = $resumePath;
        }

        $application->save();

        return redirect()->route('admin.applications.index')->with('success', 'Job application updated successfully!');
    }

    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);

        if ($application->resume && file_exists(storage_path('app/public/' . $application->resume))) {
            unlink(storage_path('app/public/' . $application->resume));
        }

        $application->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Job application deleted successfully!');
    }
}
