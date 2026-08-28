<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Edit Article</h2>
        <form method="POST" action="{{ route('admin.articles.update', $article) }}">
            @csrf
            @method('PUT')
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $article->title }}" required></div>
            <div class="mb-3"><label class="form-label">Category</label><input type="text" name="category" class="form-control" value="{{ $article->category }}" required></div>
            <div class="mb-3"><label class="form-label">Excerpt</label><textarea name="excerpt" class="form-control">{{ $article->excerpt }}</textarea></div>
            <div class="mb-3"><label class="form-label">Body</label><textarea name="body" class="form-control" rows="8" required>{{ $article->body }}</textarea></div>
            <div class="mb-3"><label class="form-label">Image</label><input type="text" name="image" class="form-control" value="{{ $article->image }}"></div>
            <div class="mb-3"><label class="form-label">Published At</label><input type="date" name="published_at" class="form-control" value="{{ $article->published_at ? $article->published_at->format('Y-m-d') : '' }}"></div>
            <div class="form-check mb-3"><input class="form-check-input" type="checkbox" name="is_featured" value="1" @checked($article->is_featured)><label class="form-check-label">Featured</label></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
