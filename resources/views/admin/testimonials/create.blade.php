<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Testimonial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2>Create Testimonial</h2>
        <form method="POST" action="{{ route('admin.testimonials.store') }}">
            @csrf
            <div class="mb-3"><label class="form-label">Name</label><input type="text" name="name" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Company</label><input type="text" name="company" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Quote</label><textarea name="quote" class="form-control" rows="5" required></textarea></div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
