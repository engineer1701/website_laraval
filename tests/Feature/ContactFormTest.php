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

    public function test_contact_form_still_succeeds_when_email_delivery_fails(): void
    {
        $this->withoutMiddleware();

        Mail::shouldReceive('to')->once()->andThrow(new \RuntimeException('SMTP unavailable'));

        $response = $this->post(route('contact.store'), [
            'first_name' => 'Grace',
            'last_name' => 'Hopper',
            'company' => 'Naval Labs',
            'country' => 'US',
            'email' => 'grace@example.com',
            'phone' => '987654321',
            'message' => 'We should still save this enquiry.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contacts', [
            'email' => 'grace@example.com',
            'company' => 'Naval Labs',
        ]);
    }
}
