<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Capability;
use App\Models\Career;
use App\Models\CaseStudy;
use App\Models\Industry;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private function orderedServices()
    {
        return Service::orderByRaw("CASE title WHEN 'Finance' THEN 1 WHEN 'Strategic Planning' THEN 2 WHEN 'Capabilities' THEN 3 WHEN 'Human Resources' THEN 4 ELSE 5 END")
            ->orderBy('id')
            ->get();
    }

    public function home()
    {
        $teamMembers = TeamMember::latest()->take(4)->get();
        $testimonials = Testimonial::latest()->take(3)->get();
        $articles = Article::latest('published_at')->take(4)->get();
        $services = $this->orderedServices();

        return view('pages.home', compact('teamMembers', 'testimonials', 'articles', 'services'));
    }

    public function about()
    {
        $testimonials = Testimonial::latest()->get();

        return view('pages.about', compact('testimonials'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function news(Request $request)
    {
        $query = Article::query();
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $articles = $query->latest('published_at')->paginate(8);
        $categories = Article::select('category')->distinct()->pluck('category');

        return view('pages.news', compact('articles', 'categories'));
    }

    public function article(Article $article)
    {
        return view('pages.article', compact('article'));
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function testimonials()
    {
        $testimonials = Testimonial::latest()->get();

        return view('pages.testimonials', compact('testimonials'));
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsOfService()
    {
        return view('pages.terms-of-service');
    }

    public function careers()
    {
        $careers = Career::latest()->get();

        return view('pages.careers', compact('careers'));
    }

    public function careerDetail(Career $career)
    {
        return view('pages.career-detail', compact('career'));
    }

    public function careerDetails()
    {
        $career = Career::where('slug', 'trading-risk-endur-functional-consulting-manager')->firstOrFail();

        return view('pages.career-detail', compact('career'));
    }

    public function industries()
    {
        $industries = Industry::latest()->get();

        return view('pages.industries', compact('industries'));
    }

    public function capabilities()
    {
        $capabilities = Capability::latest()->get();

        return view('pages.capabilities', compact('capabilities'));
    }

    public function services()
    {
        $services = $this->orderedServices();

        return view('pages.services', compact('services'));
    }

    public function team()
    {
        $teamMembers = TeamMember::latest()->get();

        return view('pages.team', compact('teamMembers'));
    }

    public function teamMember(TeamMember $teamMember)
    {
        return view('pages.team-member', compact('teamMember'));
    }

    public function caseStudies()
    {
        $caseStudies = CaseStudy::latest()->get();

        return view('pages.case-studies', compact('caseStudies'));
    }

    public function caseStudy(CaseStudy $caseStudy)
    {
        return view('pages.case-study', compact('caseStudy'));
    }
}
