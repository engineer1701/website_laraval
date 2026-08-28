<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::latest()->paginate(10);

        return view('admin.team-members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'bio' => 'required|string',
            'email' => 'nullable|email|max:255',
            'linkedin' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('uploads/team-members', 'public');
        }

        TeamMember::create($validated);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member created successfully.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'bio' => 'required|string',
            'email' => 'nullable|email|max:255',
            'linkedin' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $teamMember->deletePublicImage($teamMember->photo);
            $validated['photo'] = $request->file('photo')->store('uploads/team-members', 'public');
        } else {
            unset($validated['photo']);
        }

        $teamMember->update($validated);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->deletePublicImage($teamMember->photo);
        $teamMember->delete();

        return redirect()->route('admin.team-members.index')->with('success', 'Team member deleted successfully.');
    }
}
