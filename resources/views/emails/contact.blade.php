<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>
<body>
    <h2>New consultancy enquiry</h2>
    <p><strong>Name:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
    <p><strong>Company:</strong> {{ $contact->company }}</p>
    <p><strong>Country:</strong> {{ $contact->country }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Message:</strong><br>{{ $contact->message }}</p>
</body>
</html>
