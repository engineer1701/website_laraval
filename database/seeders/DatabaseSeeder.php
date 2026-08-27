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

        Article::updateOrCreate([
            'slug' => 'how-cross-border-data-regulations-are-reshaping-global-business-models',
        ], [
            'title' => 'How Cross-Border Data Regulations Are Reshaping Global Business Models',
            'category' => 'Strategy',
            'image' => 'images/news-img1.jpg',
            'excerpt' => 'Organizations are fundamentally rethinking their data strategies as regulatory frameworks evolve across jurisdictions.',
            'body' => "The landscape of cross-border data transfer has transformed dramatically over the past three years. What began as regional privacy initiatives has evolved into a complex web of requirements that affect how multinational organizations store, process, and transfer information across borders. Companies that once maintained centralized data architectures are now implementing distributed systems with localized processing capabilities to meet increasingly stringent compliance requirements.\n\nThe impact extends far beyond IT departments. Legal teams are working alongside technology leaders to map data flows and assess regulatory exposure. Finance organizations are budgeting for infrastructure changes that enable data residency. Human resources departments are reconsidering how they manage employee information across global operations. This cross-functional challenge requires coordinated responses that touch every aspect of organizational operations.\n\nThree regulatory paradigms driving change\n\nToday's compliance landscape is shaped by three distinct regulatory approaches. The European Union's comprehensive framework emphasizes individual rights and consent-based processing. North American regulations focus on sector-specific protections with enforcement through private litigation. Meanwhile, Asia-Pacific jurisdictions are adopting models that balance economic development with digital sovereignty concerns.\n\nUnderstanding these different paradigms is critical for organizations operating globally. A strategy that satisfies European requirements may fall short in China or India. Companies are discovering that one-size-fits-all approaches no longer work. Instead, they need flexible architectures that can adapt to regional requirements while maintaining operational efficiency and consistent user experiences.\n\nThe technical architecture response\n\nForward-thinking organizations are adopting distributed data architectures that process information closer to its source. Edge computing capabilities allow local processing while maintaining centralized oversight. Data tokenization and encryption techniques enable analytics without exposing sensitive information across borders. These technical solutions require significant investment but provide long-term flexibility as regulations continue evolving.\n\nCloud service providers have responded by expanding their regional offerings, with providers now operating localized instances that guarantee data residency. Multi-cloud strategies are becoming more common as organizations seek to avoid vendor lock-in while meeting diverse regulatory requirements. The technical complexity has increased, but so has the sophistication of available solutions.\n\nCompetitive advantage through compliance excellence\n\nOrganizations that view regulatory compliance as purely a cost center miss significant opportunities. Companies that establish robust data governance frameworks build trust with customers and partners. This trust translates into competitive advantage, particularly in industries where data sensitivity is paramount. Financial services firms, healthcare providers, and technology companies are finding that superior data practices become market differentiators.\n\nThe most successful organizations integrate compliance into product development from the outset. Privacy by design principles ensure that new offerings meet regulatory requirements without extensive retrofitting. This proactive approach accelerates time to market and reduces technical debt. It also positions companies to expand into new markets more rapidly as they can demonstrate compliance readiness.\n\nLooking ahead: Preparing for continued evolution\n\nRegulatory frameworks will continue evolving as technology advances and societal expectations shift. Organizations should build adaptable systems rather than point solutions for current requirements. This means investing in governance capabilities, training staff across functions, and maintaining awareness of regulatory developments globally.\n\nThe companies that thrive will be those that view cross-border data regulations not as barriers but as catalysts for building more resilient, trustworthy business models. They will invest in the people, processes, and technologies needed to navigate complexity while maintaining the agility to seize global opportunities. The path forward requires strategic thinking, operational discipline, and commitment from leadership to make data governance a core competency rather than a compliance checkbox.",
            'published_at' => '2025-09-29 00:00:00',
            'is_featured' => true,
        ]);

        Article::updateOrCreate([
            'title' => 'A Practical Framework for Succession Planning in Family Enterprises',
            'slug' => 'a-practical-framework-for-succession-planning-in-family-enterprises',
            'category' => 'Finance',
            'image' => 'images/news-img2.jpg',
            'excerpt' => 'Successfully transferring leadership across generations requires more than estate planning.',
            'body' => "Family enterprises face a unique challenge that publicly traded companies rarely encounter: the need to balance family dynamics with business imperatives while transferring leadership across generations.\n\nBy Katherine Reynolds, James Patterson, Priya Mehta, and David Williamson",
            'published_at' => '2025-09-26 00:00:00',
        ]);

        Article::updateOrCreate([
            'slug' => 'when-employee-departures-signal-deeper-organizational-issues',
        ], [
            'title' => 'When Employee Departures Signal Deeper Organizational Issues',
            'category' => 'HR',
            'image' => 'images/news-img3.jpg',
            'excerpt' => 'High turnover isn\'t always about compensation or benefits.',
            'body' => "When valued employees begin leaving, most organizations respond predictably: they conduct exit interviews, review compensation data, and perhaps adjust salary ranges or enhance benefits packages.\n\nBy Jennifer Holland, Marcus Thompson, Alicia Rodriguez, and Christopher Lee",
            'published_at' => '2025-09-23 00:00:00',
        ]);

        Article::updateOrCreate([
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

        Testimonial::whereNotIn('name', ['Sarah Davies', 'Anisha Alluri'])->delete();

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

        Career::updateOrCreate([
            'slug' => 'trading-risk-endur-functional-consulting-manager',
        ], [
            'title' => 'Trading & Risk Endur Functional Consulting Manager',
            'location' => 'Various locations',
            'level' => 'Senior Level',
            'employment_type' => 'Full time',
            'summary' => 'Job No. R00251687',
            'responsibilities' => "Manage the migration processing for various countries especially Australia, UK-Visit Visa , Schengen Visa and USA.\nCoordinate a team of consultants to ensure efficient workflow and client satisfaction.\nProvide expert advice and guidance to clients regarding migration procedures, requirements, and options.\nConduct comprehensive assessments of clients' eligibility for various migration programs.\nMaintain up-to-date knowledge of immigration laws, policies, and procedures for different countries.\nHandle complex immigration cases and resolve any issues or challenges that may arise.",
            'qualifications' => "Minimum of 1 year of experience as a migration Consultant.\nStrong knowledge of immigration laws, regulations, and procedures for various countries.\nKnowledge about visa processing of various countries\nExcellent communication and interpersonal skills.\nProficiency in Malayalam and English is essential.\nBachelor's degree in any field is preferred.",
            'benefits' => "Cell phone reimbursement\nHealth insurance\nPaid sick time\nPaid time off",
            'application_email' => 'hrd@reubro.com',
        ]);

        Career::updateOrCreate([
            'slug' => 'artificial-intelligence-ai-data-science',
        ], [
            'title' => 'Artificial intelligence (AI) & data science',
            'location' => 'Various locations',
            'level' => 'Senior Level',
            'employment_type' => 'Full time',
            'summary' => 'Help clients apply artificial intelligence and data science to solve complex business challenges.',
            'responsibilities' => "Lead artificial intelligence and data science engagements with clients across industries.",
            'qualifications' => "Experience in artificial intelligence, data science, or a related consulting role.",
            'benefits' => "Career development, collaborative teams, and market-leading client exposure.",
            'application_email' => 'careers@consultancycompany.test',
        ]);

        Career::updateOrCreate([
            'slug' => 'program-project-management',
        ], [
            'title' => 'Program & project management',
            'location' => 'Various locations',
            'level' => 'Senior Level',
            'employment_type' => 'Full time',
            'summary' => 'Lead complex programs and projects that deliver positive change for clients.',
            'responsibilities' => "Lead cross-functional programs and projects from planning through delivery.",
            'qualifications' => "Experience managing complex programs or projects in a consulting environment.",
            'benefits' => "Career development, collaborative teams, and market-leading client exposure.",
            'application_email' => 'careers@consultancycompany.test',
        ]);

        Career::where('slug', 'operations-excellence-consultant')->delete();
    }
}
