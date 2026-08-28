<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Create Service</h2>
        <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="5" required></textarea></div>
            <div class="mb-3"><label class="form-label">Icon image</label><input type="file" name="icon" accept="image/*" class="form-control"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
