<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Capability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Edit Capability</h2>
        <form method="POST" action="{{ route('admin.capabilities.update', $capability) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $capability->title }}" required></div>
            <div class="mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="5" required>{{ $capability->description }}</textarea></div>
            <div class="mb-3"><label class="form-label">Image</label>@if($capability->image)<img src="{{ $capability->publicImageUrl($capability->image) }}" class="d-block mb-2" style="max-width:180px;max-height:120px;object-fit:cover" alt="Current image">@endif<input type="file" name="image" accept="image/*" class="form-control"><small class="text-muted">Choose a new image to replace the current one.</small></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
