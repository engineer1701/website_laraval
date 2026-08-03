<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_form_stores_enquiry_and_sends_notification(): void
    {
        Mail::fake();

        $this->withoutMiddleware();

        $response = $this->post(route('contact.store'), [
            'first_name' => 'Ada',
            'last_name' => 'Lovelace',
            'company' => 'Acme Labs',
            'country' => 'UK',
            'email' => 'ada@example.com',
            'phone' => '123456789',
            'message' => 'Hello from the automated test.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contacts', [
            'email' => 'ada@example.com',
            'company' => 'Acme Labs',
        ]);

        Mail::assertQueued(ContactMail::class);
    }
}
