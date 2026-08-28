<form method="POST" action="{{ $contact ? route('admin.contacts.update', $contact) : route('admin.contacts.store') }}">
    @csrf
    @if($contact)
        @method('PUT')
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row g-3">
        <div class="col-md-6"><label class="form-label">First name</label><input type="text" name="first_name" class="form-control" value="{{ old('first_name', $contact?->first_name) }}" required></div>
        <div class="col-md-6"><label class="form-label">Last name</label><input type="text" name="last_name" class="form-control" value="{{ old('last_name', $contact?->last_name) }}" required></div>
        <div class="col-md-6"><label class="form-label">Company</label><input type="text" name="company" class="form-control" value="{{ old('company', $contact?->company) }}" required></div>
        <div class="col-md-6"><label class="form-label">Country</label><input type="text" name="country" class="form-control" value="{{ old('country', $contact?->country) }}" required></div>
        <div class="col-md-6"><label class="form-label">Email</label><input type="email" name="email" class="form-control" value="{{ old('email', $contact?->email) }}" required></div>
        <div class="col-md-6"><label class="form-label">Phone</label><input type="text" name="phone" class="form-control" value="{{ old('phone', $contact?->phone) }}" required></div>
        <div class="col-12"><label class="form-label">Message</label><textarea name="message" class="form-control" rows="6" required>{{ old('message', $contact?->message) }}</textarea></div>
        <div class="col-12"><button class="btn btn-primary">{{ $submitLabel }}</button></div>
    </div>
</form>
