<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Create Article</h2>
        <form method="POST" action="{{ route('admin.articles.store') }}">
            @csrf
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Category</label><input type="text" name="category" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Excerpt</label><textarea name="excerpt" class="form-control"></textarea></div>
            <div class="mb-3"><label class="form-label">Body</label><textarea name="body" class="form-control" rows="8" required></textarea></div>
            <div class="mb-3"><label class="form-label">Image</label><input type="text" name="image" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Published At</label><input type="date" name="published_at" class="form-control"></div>
            <div class="form-check mb-3"><input class="form-check-input" type="checkbox" name="is_featured" value="1"><label class="form-check-label">Featured</label></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
