<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Article;
use App\Models\Capability;
use App\Models\Career;
use App\Models\CaseStudy;
use App\Models\Industry;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::firstOrCreate([
            'email' => 'admin@consultancy.test',
        ], [
            'name' => 'System Administrator',
            'password' => bcrypt('admin123'),
        ]);

        Article::firstOrCreate([
            'slug' => 'how-cross-border-data-regulations-are-reshaping-global-business-models',
        ], [
            'title' => 'How Cross-Border Data Regulations Are Reshaping Global Business Models',
            'category' => 'Strategy',
            'image' => 'images/news-img1.jpg',
            'excerpt' => 'Organizations are fundamentally rethinking their data strategies as regulatory frameworks evolve across jurisdictions.',
            'body' => "The convergence of GDPR, CCPA, and emerging regulations in Asia-Pacific is forcing enterprises to adopt more sophisticated data governance frameworks.\n\nBy Sarah Mitchell, Rajesh Kumar, Emma Chen, and Michael Thornton",
            'published_at' => '2025-09-29 00:00:00',
            'is_featured' => true,
        ]);

        Article::firstOrCreate([
            'title' => 'A Practical Framework for Succession Planning in Family Enterprises',
            'slug' => 'a-practical-framework-for-succession-planning-in-family-enterprises',
            'category' => 'Finance',
            'image' => 'images/news-img2.jpg',
            'excerpt' => 'Successfully transferring leadership across generations requires more than estate planning.',
            'body' => "Family enterprises face a unique challenge that publicly traded companies rarely encounter: the need to balance family dynamics with business imperatives while transferring leadership across generations.\n\nBy Katherine Reynolds, James Patterson, Priya Mehta, and David Williamson",
            'published_at' => '2025-09-26 00:00:00',
        ]);

        Article::firstOrCreate([
            'slug' => 'when-employee-departures-signal-deeper-organizational-issues',
        ], [
            'title' => 'When Employee Departures Signal Deeper Organizational Issues',
            'category' => 'HR',
            'image' => 'images/news-img3.jpg',
            'excerpt' => 'High turnover isn\'t always about compensation or benefits.',
            'body' => "When valued employees begin leaving, most organizations respond predictably: they conduct exit interviews, review compensation data, and perhaps adjust salary ranges or enhance benefits packages.\n\nBy Jennifer Holland, Marcus Thompson, Alicia Rodriguez, and Christopher Lee",
            'published_at' => '2025-09-23 00:00:00',
        ]);

        Article::firstOrCreate([
            'slug' => 'sequence-of-steps-in-donating-an-enterprise',
        ], [
            'title' => 'Sequence of Steps in Donating an Enterprise',
            'category' => 'Strategy',
            'image' => 'images/news-img3.jpg',
            'excerpt' => 'Transferring business ownership to charitable organizations requires careful planning.',
            'body' => "Business owners occasionally consider donating their enterprises to charitable organizations, universities, or foundations as a legacy-building strategy.\n\nBy Robert Jameson, Victoria Chang, Daniel Foster, and Amanda Patel",
            'published_at' => '2025-09-10 00:00:00',
        ]);

        CaseStudy::firstOrCreate([
            'slug' => 'reducing-operating-expense-by-23-percent-in-90-days',
        ], [
            'title' => 'Reducing Operating Expense by 23% in 90 Days',
            'client' => 'Northstar Logistics',
            'industry' => 'Operations',
            'result' => 'Reduced cost by 23%',
            'summary' => 'We helped a regional logistics provider simplify its operating model and improve service reliability.',
            'body' => "Northstar Logistics was experiencing margin compression across its network. We mapped end-to-end activities, renegotiated supplier terms, and introduced a tighter governance model.\n\nThe program reduced cost by 23% in under three months while improving on-time performance by 16%.",
            'image' => 'images/news-img1.jpg',
        ]);

        CaseStudy::firstOrCreate([
            'slug' => 'accelerating-market-entry-for-a-new-healthcare-platform',
        ], [
            'title' => 'Accelerating Market Entry for a New Healthcare Platform',
            'client' => 'Aurelia Health',
            'industry' => 'Healthcare',
            'result' => 'Launched in 6 markets',
            'summary' => 'We supported a digital health startup to enter new markets with a focused growth plan.',
            'body' => "Aurelia Health needed a pragmatic go-to-market plan to reach hospital groups across new regions. We defined the operating model, compliance approach, and sales motion.\n\nThe client launched into six markets within six months and secured its first anchor partnerships.",
            'image' => 'images/news-img2.jpg',
        ]);

        CaseStudy::firstOrCreate([
            'title' => 'Improving Retention by 18% for a Scaling Tech Firm',
            'slug' => 'improving-retention-by-18-percent-for-a-scaling-tech-firm',
            'client' => 'Brightlane',
            'industry' => 'Technology',
            'result' => 'Improved retention by 18%',
            'summary' => 'A fast-growing technology client needed stronger leadership practices and career paths.',
            'body' => "Brightlane had experienced accelerated hiring but weak retention in its client delivery teams. We implemented manager coaching, role design changes, and a more transparent career framework.\n\nThe result was an 18% improvement in retention in the first year.",
            'image' => 'images/news-img3.jpg',
        ]);

        TeamMember::firstOrCreate([
            'email' => 'angie@consultancycompany.test',
        ], [
            'name' => 'Dr. Angie Montgomery',
            'title' => 'Co-Founder & CEO',
            'photo' => 'images/team-img2.jpg',
            'bio' => 'Dr. Montgomery leads the firm with a focus on enterprise transformation, executive advisory, and strategic growth.',
            'linkedin' => 'https://www.linkedin.com',
        ]);

        TeamMember::firstOrCreate([
            'email' => 'michael@consultancycompany.test',
        ], [
            'name' => 'Michael Richardson',
            'title' => 'Managing Partner, Strategy',
            'photo' => 'images/team-img1.jpg',
            'bio' => 'Michael partners with leadership teams to shape growth strategies, new ventures, and operating models.',
            'linkedin' => 'https://www.linkedin.com',
        ]);

        TeamMember::firstOrCreate([
            'email' => 'david@consultancycompany.test',
        ], [
            'name' => 'David Ramirez',
            'title' => 'Partner, Organizational Development',
            'photo' => 'images/team-img3.jpg',
            'bio' => 'David helps organizations create stronger leadership systems, change programs, and culture transformation.',
            'linkedin' => 'https://www.linkedin.com',
        ]);

        TeamMember::firstOrCreate([
            'email' => 'sarah@consultancycompany.test',
        ], [
            'name' => 'Sarah Chen',
            'title' => 'Partner, Operations & Digital Transformation',
            'photo' => 'images/team-img4.jpg',
            'bio' => 'Sarah works with leadership teams to build resilient operating models and accelerate digital change.',
            'linkedin' => 'https://www.linkedin.com',
        ]);

        Testimonial::firstOrCreate([
            'name' => 'Helen Brooks',
            'company' => 'Northstar Logistics',
        ], [
            'quote' => 'The team brought clarity to a complex transformation and delivered measurable improvements quickly.',
        ]);

        Testimonial::firstOrCreate([
            'name' => 'Sofia Alvarez',
            'company' => 'Aurelia Health',
        ], [
            'quote' => 'Their pragmatic approach helped us launch with confidence and focus on the right growth markets.',
        ]);

        Testimonial::firstOrCreate([
            'name' => 'Darren Patel',
            'company' => 'Brightlane',
        ], [
            'quote' => 'We saw stronger leadership alignment and a significant uplift in employee retention.',
        ]);

        Testimonial::firstOrCreate([
            'name' => 'Sarah Davies',
            'company' => 'Salesforce Consulting',
        ], [
            'quote' => "We're incredibly grateful for the transformative impact that Consulting Company has had on our organization. Thanks to the Consulting Company team, we've seen an improvement in our workplace culture, with a heightened awareness of mental health and a collective commitment to fostering a safe and respectful environment for all. We recommend Consulting Company to any organization looking to prioritize employee well-being and create a supportive, safe & respectful workplace culture.",
        ]);

        Testimonial::firstOrCreate([
            'name' => 'Anisha Alluri',
            'company' => 'INC',
        ], [
            'quote' => "Our experience with Consulting Company has been exceptional. From their responsive communication platform to their responsive communication. They provided valuable insights at both organizational and individual levels, with a robust assessment of our hazard exposure. The reports were clear, actionable, and highly data-driven—'easy, simple, and relevant,' taking less than five minutes to complete while downloading reports, graphs and tailored data on demand.",
        ]);

        Service::firstOrCreate([
            'title' => 'Strategy and Growth',
            'description' => 'Helping clients define ambitious growth agendas, competitive positioning, and transformation roadmaps.',
        ]);

        Service::firstOrCreate([
            'title' => 'Operations Excellence',
        ], [
            'description' => 'Improving operating performance through process redesign, supply chain, and execution capability.',
        ]);

        Industry::firstOrCreate([
            'title' => 'Financial Services',
        ], [
            'description' => 'Supporting banks, insurers, and asset managers through complex regulatory and growth challenges.',
        ]);

        Industry::firstOrCreate([
            'title' => 'Healthcare',
        ], [
            'description' => 'Advancing care delivery, digital health, and transformation in provider and payer organizations.',
        ]);

        Capability::firstOrCreate([
            'title' => 'Digital and Analytics',
        ], [
            'description' => 'Unlocking data-driven decision making and digital experiences across the enterprise.',
        ]);

        Capability::firstOrCreate([
            'title' => 'People and Leadership',
        ], [
            'description' => 'Building high-performing organizational systems, leadership capability, and change readiness.',
        ]);

        Career::firstOrCreate([
            'slug' => 'trading-risk-endur-functional-consulting-manager',
        ], [
            'title' => 'Trading & Risk Endur Functional Consulting Manager',
            'location' => 'Various locations',
            'level' => 'Senior Level',
            'employment_type' => 'Full time',
            'summary' => 'Lead enterprise trading and risk transformation programs with a focus on operational excellence and client delivery.',
            'responsibilities' => "Manage strategy and delivery for trading and risk platform initiatives. Work closely with clients to define requirements, roadmaps, and adoption plans. Lead cross-functional teams and ensure high-quality execution.",
            'qualifications' => "7+ years of consulting or functional experience in trading, risk, or financial services. Strong stakeholder communication and leadership skills.",
            'benefits' => "Health insurance, paid time off, flexible working policies.",
            'application_email' => 'careers@consultancycompany.test',
        ]);

        Career::firstOrCreate([
            'slug' => 'operations-excellence-consultant',
        ], [
            'title' => 'Operations Excellence Consultant',
            'location' => 'London',
            'level' => 'Manager Level',
            'employment_type' => 'Full time',
            'summary' => 'Support operations transformation programs that deliver measurable efficiency and customer experience improvements.',
            'responsibilities' => "Drive process improvement initiatives, support operating model redesign, and help clients implement scalable delivery solutions.",
            'qualifications' => "Experience in operations transformation, process redesign, or continuous improvement roles.",
            'benefits' => "Career development, collaborative teams, and market-leading client exposure.",
            'application_email' => 'careers@consultancycompany.test',
        ]);
    }
}
