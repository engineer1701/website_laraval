<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CapabilityController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about-us', [PageController::class, 'about'])->name('about.us');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact.us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/career-details', [PageController::class, 'careerDetails'])->name('career.details');
Route::get('/careers/{career:slug}', [PageController::class, 'careerDetail'])->name('career.detail');
Route::get('/industries', [PageController::class, 'industries'])->name('industries');
Route::get('/capabilities', [PageController::class, 'capabilities'])->name('capabilities');
Route::get('/insights', [PageController::class, 'news'])->name('news');
Route::get('/news', [PageController::class, 'news'])->name('news.page');
Route::get('/insights/{article:slug}', [PageController::class, 'article'])->name('article');
Route::get('/case-studies', [PageController::class, 'caseStudies'])->name('case-studies');
Route::get('/case-studies/{caseStudy:slug}', [PageController::class, 'caseStudy'])->name('case-study');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/team/{teamMember}', [PageController::class, 'teamMember'])->name('team.member');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('articles', ArticleController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('industries', IndustryController::class)->except(['show']);
        Route::resource('capabilities', CapabilityController::class)->except(['show']);
        Route::resource('case-studies', CaseStudyController::class)->except(['show']);
        Route::resource('careers', CareerController::class)->except(['show']);
        Route::resource('team-members', TeamMemberController::class)->except(['show']);
        Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    });
});

