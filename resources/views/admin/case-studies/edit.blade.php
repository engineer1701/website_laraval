<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Case Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Edit Case Study</h2>
        <form method="POST" action="{{ route('admin.case-studies.update', $caseStudy) }}">
            @csrf
            @method('PUT')
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $caseStudy->title }}" required></div>
            <div class="mb-3"><label class="form-label">Slug</label><input type="text" name="slug" class="form-control" value="{{ $caseStudy->slug }}" required></div>
            <div class="mb-3"><label class="form-label">Client</label><input type="text" name="client" class="form-control" value="{{ $caseStudy->client }}" required></div>
            <div class="mb-3"><label class="form-label">Industry</label><input type="text" name="industry" class="form-control" value="{{ $caseStudy->industry }}" required></div>
            <div class="mb-3"><label class="form-label">Outcome</label><input type="text" name="result" class="form-control" value="{{ $caseStudy->result }}"></div>
            <div class="mb-3"><label class="form-label">Summary</label><textarea name="summary" class="form-control" rows="3" required>{{ $caseStudy->summary }}</textarea></div>
            <div class="mb-3"><label class="form-label">Body</label><textarea name="body" class="form-control" rows="8" required>{{ $caseStudy->body }}</textarea></div>
            <div class="mb-3"><label class="form-label">Image</label><input type="text" name="image" class="form-control" value="{{ $caseStudy->image }}"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
