<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = CaseStudy::latest()->paginate(10);

        return view('admin.case-studies.index', compact('caseStudies'));
    }

    public function create()
    {
        return view('admin.case-studies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:case_studies,slug',
            'client' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'result' => 'nullable|string|max:255',
            'summary' => 'required|string',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/case-studies', 'public');
        }

        CaseStudy::create($validated);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study created successfully.');
    }

    public function edit(CaseStudy $caseStudy)
    {
        return view('admin.case-studies.edit', compact('caseStudy'));
    }

    public function update(Request $request, CaseStudy $caseStudy)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:case_studies,slug,' . $caseStudy->id,
            'client' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'result' => 'nullable|string|max:255',
            'summary' => 'required|string',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $caseStudy->deletePublicImage($caseStudy->image);
            $validated['image'] = $request->file('image')->store('uploads/case-studies', 'public');
        } else {
            unset($validated['image']);
        }

        $caseStudy->update($validated);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study updated successfully.');
    }

    public function destroy(CaseStudy $caseStudy)
    {
        $caseStudy->deletePublicImage($caseStudy->image);
        $caseStudy->delete();

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study deleted successfully.');
    }
}
