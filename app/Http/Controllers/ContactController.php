<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactMail($contact));
        } catch (\Throwable $e) {
            Log::warning('Contact enquiry stored but email notification failed.', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()->route('contact')->with('success', 'Your enquiry has been received. We will be in touch shortly.');
    }
}
