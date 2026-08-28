<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Team Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Team Members</h2>
            <div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary me-2">Dashboard</a>
                <a href="{{ route('admin.team-members.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        <table class="table table-striped">
            <thead><tr><th>Name</th><th>Title</th><th>Email</th><th>Actions</th></tr></thead>
            <tbody>
                @foreach($teamMembers as $teamMember)
                    <tr>
                        <td>{{ $teamMember->name }}</td>
                        <td>{{ $teamMember->title }}</td>
                        <td>{{ $teamMember->email }}</td>
                        <td>
                            <a href="{{ route('admin.team-members.edit', $teamMember) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.team-members.destroy', $teamMember) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
