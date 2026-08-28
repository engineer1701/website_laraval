<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container py-4">
        <div class="admin-header">
            <div><p class="admin-eyebrow">Consultancy Company</p><h2>Content control center</h2></div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
        </div>
        <div class="mb-4"><p class="admin-eyebrow">Overview</p><h1 class="mb-1">Good morning, admin.</h1><p class="admin-subtitle">Keep the public site current from one calm, focused workspace.</p></div>
        <div class="row g-3 mb-5">
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Insights articles</div><div class="admin-metric-value">{{ $articleCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Testimonials</div><div class="admin-metric-value">{{ $testimonialCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Contacts</div><div class="admin-metric-value">{{ $contactCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Services</div><div class="admin-metric-value">{{ $serviceCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Industries</div><div class="admin-metric-value">{{ $industryCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Capabilities</div><div class="admin-metric-value">{{ $capabilityCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Case Studies</div><div class="admin-metric-value">{{ $caseStudyCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Careers</div><div class="admin-metric-value">{{ $careerCount }}</div></div></div>
            <div class="col-md-3 col-6"><div class="card admin-metric"><div class="admin-metric-label">Team Members</div><div class="admin-metric-value">{{ $teamMemberCount }}</div></div></div>
        </div>
        <div class="d-flex justify-content-between align-items-end mb-3"><div><p class="admin-eyebrow">Workspace</p><h3 class="mb-0">Manage content</h3></div></div>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('admin.articles.index') }}" class="admin-quick-link">Manage Insights</a>
            <a href="{{ route('admin.testimonials.index') }}" class="admin-quick-link">Manage Testimonials</a>
            <a href="{{ route('admin.services.index') }}" class="admin-quick-link">Manage Services</a>
            <a href="{{ route('admin.industries.index') }}" class="admin-quick-link">Manage Industries</a>
            <a href="{{ route('admin.capabilities.index') }}" class="admin-quick-link">Manage Capabilities</a>
            <a href="{{ route('admin.case-studies.index') }}" class="admin-quick-link">Manage Case Studies</a>
            <a href="{{ route('admin.careers.index') }}" class="admin-quick-link">Manage Careers</a>
            <a href="{{ route('admin.team-members.index') }}" class="admin-quick-link">Manage Team</a>
            <a href="{{ route('admin.contacts.index') }}" class="admin-quick-link">View Contacts</a>
        </div>
    </div>
</body>
</html>
