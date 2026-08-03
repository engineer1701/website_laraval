<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Careers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Careers</h2>
            <div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary me-2">Dashboard</a>
                <a href="{{ route('admin.careers.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        <table class="table table-striped">
            <thead><tr><th>Title</th><th>Location</th><th>Level</th><th>Actions</th></tr></thead>
            <tbody>
                @foreach($careers as $career)
                    <tr>
                        <td>{{ $career->title }}</td>
                        <td>{{ $career->location }}</td>
                        <td>{{ $career->level }}</td>
                        <td>
                            <a href="{{ route('admin.careers.edit', $career) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.careers.destroy', $career) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
