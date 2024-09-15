<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    // RETRIEVE ALL TEAMS AND DISPLAY THEM IN A VIEW
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    // CREATE PAGE FOR A SPECIFIC TEAM
    public function create()
    {
        return view('admin.team.create');
    }

    // VALIDATE AND STORE A NEW TEAM
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'required|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->image = FileUploader::uploadFile($request->file('image'), 'images/team-image');
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->youtube = $request->youtube;

        $team->save();

        return redirect()->route('admin.teams.index')->with('success', 'Team registered successfully!');
    }

    // FIND A SPECIFIC TEAM AND SHOW THE EDIT FORM
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $isEdit = true;
        return view('admin.team.edit', compact('team', 'isEdit'));
    }

    // VIEW A SPECIFIC TEAM
    public function view($id)
    {
        $team = Team::findOrFail($id);
        $isEdit = false;
        return view('admin.team.edit', compact('team', 'isEdit'));
    }

    // UPDATE A TEAM'S DETAILS
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);

        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->designation = $request->designation;

        if ($request->hasFile('image')) {
            $team->image = FileUploader::uploadFile($request->file('image'), 'images/team-image', $team->image);
        }

        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->youtube = $request->youtube;

        $team->save();

        return redirect()->route('admin.teams.index')->with('success', 'Team updated successfully!');
    }

    // UPDATE TEAM'S STATUS (ACTIVE OR BLOCKED)
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:teams,id',
            'status' => 'required|in:active,blocked',
        ]);

        $team = Team::findOrFail($request->id);
        $team->update(['status' => $request->status]);

        return response()->json(['message' => 'Team status updated successfully']);
    }

    // DELETE A TEAM
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team deleted successfully!');
    }
}
