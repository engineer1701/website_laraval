<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Industry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Edit Industry</h2>
        <form method="POST" action="{{ route('admin.industries.update', $industry) }}">
            @csrf
            @method('PUT')
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $industry->title }}" required></div>
            <div class="mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="5" required>{{ $industry->description }}</textarea></div>
            <div class="mb-3"><label class="form-label">Image</label><input type="text" name="image" class="form-control" value="{{ $industry->image }}"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
