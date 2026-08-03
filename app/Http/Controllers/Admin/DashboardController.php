<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Capability;
use App\Models\Career;
use App\Models\CaseStudy;
use App\Models\Contact;
use App\Models\Industry;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'articleCount' => Article::count(),
            'testimonialCount' => Testimonial::count(),
            'contactCount' => Contact::count(),
            'serviceCount' => Service::count(),
            'industryCount' => Industry::count(),
            'capabilityCount' => Capability::count(),
            'caseStudyCount' => CaseStudy::count(),
            'careerCount' => Career::count(),
            'teamMemberCount' => TeamMember::count(),
        ]);
    }
}
