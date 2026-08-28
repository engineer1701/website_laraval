<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Edit Contact Enquiry</h2>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>
        @include('admin.contacts.form', ['contact' => $contact, 'submitLabel' => 'Update'])
    </div>
</body>
</html>
