<?php

use App\Http\Controllers\ConsulterPageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Models\About;
use App\Models\Blog;
use App\Models\CoverPhoto;
use App\Models\LandingPage;
use App\Models\PersonalInformation;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $testimonial = Testimonial::get();
    $team        = Team::get();
    $pricing     = Pricing::get();
    $service     = Service::get();
    $project     = Project::get();
    $coverPhoto  = CoverPhoto::first();
    $landingPage = LandingPage::first();
    $about       = About::first();
    $blog        = Blog::get();
    $personalInformation = PersonalInformation::first();
    return view('consulter.master', compact(
        'testimonial',
        'team',
        'pricing',
        'service',
        'project',
        'coverPhoto',
        'landingPage',
        'about',
        'blog',
        'personalInformation',
    ));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//--------------------------------------about-us----------------------------------------------------------------------------------------
Route::get('/search', [SearchController::class, 'search'])->name('live.search');
//--------------------------------------about-us----------------------------------------------------------------------------------------
route::get('/about-us', [ConsulterPageController::class, 'about_us'])->name('about');
//--------------------------------------contact-us--------------------------------------------------------------------------------------
route::get('/contact-us', [ConsulterPageController::class, 'contact_us'])->name('contact');
//--------------------------------------pricing-table-----------------------------------------------------------------------------------
route::get('/pricing', [ConsulterPageController::class, 'pricing'])->name('pricing');
//--------------------------------------blogs-------------------------------------------------------------------------------------------
route::get('/blogs', [ConsulterPageController::class, 'blogs'])->name('blogs');
route::get('/blog-details/{slug}', [ConsulterPageController::class, 'blog_details'])->name('blog.details');
//--------------------------------------outr-projects-----------------------------------------------------------------------------------
route::get('/projects', [ConsulterPageController::class, 'projects'])->name('projects');
route::get('/project-details/{slug}', [ConsulterPageController::class, 'project_details'])->name('project.details');
//--------------------------------------service-----------------------------------------------------------------------------------------
route::get('/services', [ConsulterPageController::class, 'services'])->name('services');
route::get('/service-details/{slug}', [ConsulterPageController::class, 'service_details'])->name('service.details');
//--------------------------------------team--------------------------------------------------------------------------------------------
route::get('/team', [ConsulterPageController::class, 'team'])->name('team');
route::get('/team-details/{slug}', [ConsulterPageController::class, 'team_details'])->name('team.details');
//--------------------------------------mail--------------------------------------------------------------------------------------------
Route::post('/send-mail', [MailController::class, 'send_mail'])->name('send.mail');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/admin-auth.php';
