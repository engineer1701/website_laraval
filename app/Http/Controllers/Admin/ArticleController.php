<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'published_at' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/articles', 'public');
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'published_at' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured');

        if ($request->hasFile('image')) {
            $article->deletePublicImage($article->image);
            $validated['image'] = $request->file('image')->store('uploads/articles', 'public');
        } else {
            unset($validated['image']);
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->deletePublicImage($article->image);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
