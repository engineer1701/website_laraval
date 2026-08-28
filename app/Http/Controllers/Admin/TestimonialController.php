<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'quote' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('uploads/testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'quote' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $testimonial->deletePublicImage($testimonial->logo);
            $validated['logo'] = $request->file('logo')->store('uploads/testimonials', 'public');
        } else {
            unset($validated['logo']);
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->deletePublicImage($testimonial->logo);
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
