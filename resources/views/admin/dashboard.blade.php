<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Admin Dashboard</h2>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-secondary">Logout</button>
            </form>
        </div>
        <div class="row g-3">
            <div class="col-md-3"><div class="card p-3"><h5>Insights articles</h5><p class="display-6 mb-0">{{ $articleCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Testimonials</h5><p class="display-6 mb-0">{{ $testimonialCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Contacts</h5><p class="display-6 mb-0">{{ $contactCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Services</h5><p class="display-6 mb-0">{{ $serviceCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Industries</h5><p class="display-6 mb-0">{{ $industryCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Capabilities</h5><p class="display-6 mb-0">{{ $capabilityCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Case Studies</h5><p class="display-6 mb-0">{{ $caseStudyCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Careers</h5><p class="display-6 mb-0">{{ $careerCount }}</p></div></div>
            <div class="col-md-3"><div class="card p-3"><h5>Team Members</h5><p class="display-6 mb-0">{{ $teamMemberCount }}</p></div></div>
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.articles.index') }}" class="btn btn-primary me-2">Manage Insights</a>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary me-2">Manage Testimonials</a>
            <a href="{{ route('admin.services.index') }}" class="btn btn-primary me-2">Manage Services</a>
            <a href="{{ route('admin.industries.index') }}" class="btn btn-primary me-2">Manage Industries</a>
            <a href="{{ route('admin.capabilities.index') }}" class="btn btn-primary me-2">Manage Capabilities</a>
            <a href="{{ route('admin.case-studies.index') }}" class="btn btn-primary me-2">Manage Case Studies</a>
            <a href="{{ route('admin.careers.index') }}" class="btn btn-primary me-2">Manage Careers</a>
            <a href="{{ route('admin.team-members.index') }}" class="btn btn-primary me-2">Manage Team</a>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">View Contacts</a>
        </div>
    </div>
</body>
</html>
