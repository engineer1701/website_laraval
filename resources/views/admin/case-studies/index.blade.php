<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Case Studies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Case Studies</h2>
            <div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary me-2">Dashboard</a>
                <a href="{{ route('admin.case-studies.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Client</th>
                    <th>Industry</th>
                    <th>Outcome</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($caseStudies as $caseStudy)
                    <tr>
                        <td>{{ $caseStudy->title }}</td>
                        <td>{{ $caseStudy->client }}</td>
                        <td>{{ $caseStudy->industry }}</td>
                        <td>{{ $caseStudy->result }}</td>
                        <td>
                            <a href="{{ route('admin.case-studies.edit', $caseStudy) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.case-studies.destroy', $caseStudy) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $caseStudies->links() }}
    </div>
</body>
</html>
