<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Testimonial;

Testimonial::create([
    'name' => 'Sarah Davies',
    'company' => 'Salesforce Consulting',
    'quote' => "We're incredibly grateful for the transformative impact that Consulting Company has had on our organization. Thanks to the Consulting Company team, we've seen an improvement in our workplace culture, with a heightened awareness of mental health and a collective commitment to fostering a safe and respectful environment for all. We recommend Consulting Company to any organization looking to prioritize employee well-being and create a supportive, safe & respectful workplace culture.",
]);

Testimonial::create([
    'name' => 'Anisha Alluri',
    'company' => 'INC',
    'quote' => "Our experience with Consulting Company has been exceptional. From their responsive communication platform to their responsive communication. They provided valuable insights at both organizational and individual levels, with a robust assessment of our hazard exposure. The reports were clear, actionable, and highly data-driven—'easy, simple, and relevant,' taking less than five minutes to complete while downloading reports, graphs and tailored data on demand.",
]);

echo "Added testimonials.\n";
