<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::latest()->paginate(10);

        return view('admin.industries.index', compact('industries'));
    }

    public function create()
    {
        return view('admin.industries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/industries', 'public');
        }

        Industry::create($validated);

        return redirect()->route('admin.industries.index')->with('success', 'Industry created successfully.');
    }

    public function edit(Industry $industry)
    {
        return view('admin.industries.edit', compact('industry'));
    }

    public function update(Request $request, Industry $industry)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $industry->deletePublicImage($industry->image);
            $validated['image'] = $request->file('image')->store('uploads/industries', 'public');
        } else {
            unset($validated['image']);
        }

        $industry->update($validated);

        return redirect()->route('admin.industries.index')->with('success', 'Industry updated successfully.');
    }

    public function destroy(Industry $industry)
    {
        $industry->deletePublicImage($industry->image);
        $industry->delete();

        return redirect()->route('admin.industries.index')->with('success', 'Industry deleted successfully.');
    }
}
