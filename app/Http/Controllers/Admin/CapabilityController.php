<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capability;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    public function index()
    {
        $capabilities = Capability::latest()->paginate(10);

        return view('admin.capabilities.index', compact('capabilities'));
    }

    public function create()
    {
        return view('admin.capabilities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/capabilities', 'public');
        }

        Capability::create($validated);

        return redirect()->route('admin.capabilities.index')->with('success', 'Capability created successfully.');
    }

    public function edit(Capability $capability)
    {
        return view('admin.capabilities.edit', compact('capability'));
    }

    public function update(Request $request, Capability $capability)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $capability->deletePublicImage($capability->image);
            $validated['image'] = $request->file('image')->store('uploads/capabilities', 'public');
        } else {
            unset($validated['image']);
        }

        $capability->update($validated);

        return redirect()->route('admin.capabilities.index')->with('success', 'Capability updated successfully.');
    }

    public function destroy(Capability $capability)
    {
        $capability->deletePublicImage($capability->image);
        $capability->delete();

        return redirect()->route('admin.capabilities.index')->with('success', 'Capability deleted successfully.');
    }
}
