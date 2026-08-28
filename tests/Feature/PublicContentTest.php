<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\Testimonial;
use Tests\TestCase;

class PublicContentTest extends TestCase
{
    public function test_new_testimonial_is_visible_on_the_public_page(): void
    {
        $testimonial = Testimonial::create([
            'name' => 'Public Testimonial',
            'company' => 'Test Company',
            'quote' => 'This testimonial should appear immediately.',
        ]);

        try {
            $this->get(route('testimonials'))
                ->assertOk()
                ->assertSee('Public Testimonial')
                ->assertSee('This testimonial should appear immediately.');
        } finally {
            $testimonial->delete();
        }
    }

    public function test_homepage_renders_all_four_default_services_in_order(): void
    {
        $serviceTitles = ['Finance', 'Strategic Planning', 'Capabilities', 'Human Resources'];

        foreach ($serviceTitles as $title) {
            Service::firstOrCreate(['title' => $title], [
                'description' => 'Test service description.',
                'icon' => null,
            ]);
        }

        $content = $this->get(route('home'))->assertOk()->getContent();
        $positions = array_map(fn (string $title): int => strpos($content, '>' . $title . '</h4>'), $serviceTitles);

        $this->assertCount(4, array_filter($positions, fn (?int $position): bool => $position !== false));
        $this->assertLessThan($positions[1], $positions[0]);
        $this->assertLessThan($positions[2], $positions[1]);
        $this->assertLessThan($positions[3], $positions[2]);
    }
}
