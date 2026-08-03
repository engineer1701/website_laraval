<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2>Edit Team Member</h2>
        <form method="POST" action="{{ route('admin.team-members.update', $teamMember) }}">
            @csrf
            @method('PUT')
            <div class="mb-3"><label class="form-label">Name</label><input type="text" name="name" class="form-control" value="{{ $teamMember->name }}" required></div>
            <div class="mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $teamMember->title }}" required></div>
            <div class="mb-3"><label class="form-label">Photo</label><input type="text" name="photo" class="form-control" value="{{ $teamMember->photo }}"></div>
            <div class="mb-3"><label class="form-label">Bio</label><textarea name="bio" class="form-control" rows="4" required>{{ $teamMember->bio }}</textarea></div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control" value="{{ $teamMember->email }}"></div>
            <div class="mb-3"><label class="form-label">LinkedIn</label><input type="url" name="linkedin" class="form-control" value="{{ $teamMember->linkedin }}"></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
