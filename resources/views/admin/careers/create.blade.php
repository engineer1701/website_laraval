<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Create Career</h2>
        <form method="POST" action="{{ route('admin.careers.store') }}">
            @csrf
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Location</label><input type="text" name="location" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Level</label><input type="text" name="level" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Employment Type</label><input type="text" name="employment_type" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Summary</label><textarea name="summary" class="form-control" rows="3"></textarea></div>
            <div class="mb-3"><label class="form-label">Responsibilities</label><textarea name="responsibilities" class="form-control" rows="4"></textarea></div>
            <div class="mb-3"><label class="form-label">Qualifications</label><textarea name="qualifications" class="form-control" rows="4"></textarea></div>
            <div class="mb-3"><label class="form-label">Benefits</label><textarea name="benefits" class="form-control" rows="4"></textarea></div>
            <div class="mb-3"><label class="form-label">Application Email</label><input type="email" name="application_email" class="form-control"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
