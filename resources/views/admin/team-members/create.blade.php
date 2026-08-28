<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Team Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <h2>Create Team Member</h2>
        <form method="POST" action="{{ route('admin.team-members.store') }}">
            @csrf
            <div class="mb-3"><label class="form-label">Name</label><input type="text" name="name" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Photo</label><input type="text" name="photo" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Bio</label><textarea name="bio" class="form-control" rows="4" required></textarea></div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control"></div>
            <div class="mb-3"><label class="form-label">LinkedIn</label><input type="url" name="linkedin" class="form-control"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
