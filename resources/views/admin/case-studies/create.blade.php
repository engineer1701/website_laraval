<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Case Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Create Case Study</h2>
        <form method="POST" action="{{ route('admin.case-studies.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Slug</label><input type="text" name="slug" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Client</label><input type="text" name="client" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Industry</label><input type="text" name="industry" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Outcome</label><input type="text" name="result" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Summary</label><textarea name="summary" class="form-control" rows="3" required></textarea></div>
            <div class="mb-3"><label class="form-label">Body</label><textarea name="body" class="form-control" rows="8" required></textarea></div>
            <div class="mb-3"><label class="form-label">Image</label><input type="file" name="image" accept="image/*" class="form-control"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
