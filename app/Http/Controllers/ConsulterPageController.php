<?php

namespace App\Http\Controllers;

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


class ConsulterPageController extends Controller
{
//-----------------------------------------about_us-----------------------------------------
    public function about_us()
    {
        $coverPhoto = CoverPhoto::first();
        $about      = About::first();
        $team       = Team::get();
        $personalInformation = PersonalInformation::first();
        $landingPage = LandingPage::first();
        $blog        = Blog::get();
        $averageRating = Testimonial::avg('star');
        return view('consulter.components.about',
        compact(
            'coverPhoto',
            'about',
            'personalInformation',
            'blog',
            'landingPage',
            'team',
            'averageRating',
        )
    );
    }
//-----------------------------------------contact_us-----------------------------------------
    public function contact_us()
    {
        $coverPhoto = CoverPhoto::first();
        $blog        = Blog::get();
        $personalInformation = PersonalInformation::first();
        $landingPage = LandingPage::first();

        return view('consulter.components.contact',
        compact(
            'coverPhoto',
            'personalInformation',
            'blog',
            'landingPage',
            'landingPage',
        ));
    }
//-----------------------------------------pricing-----------------------------------------
    public function pricing()
    {
        $coverPhoto = CoverPhoto::first();
        $pricing    = Pricing::get();
        $blog        = Blog::get();
        $landingPage = LandingPage::first();
        $personalInformation = PersonalInformation::first();

        return view('consulter.components.pricing',
    compact(
        'coverPhoto',
            'landingPage',
            'blog',
            'personalInformation',
            'pricing',
    ));
    }
//-----------------------------------------blogs-----------------------------------------
    public function blogs()
    {
        $blog = Blog::get();
        $landingPage = LandingPage::first();
        $coverPhoto = CoverPhoto::first();
        $personalInformation = PersonalInformation::first();

        return view('consulter.components.blogs',
    compact(
        'blog',
        'landingPage',
            'coverPhoto',
            'personalInformation',
    ));
    
    }
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $landingPage = LandingPage::first();
        $coverPhoto = CoverPhoto::first();
        $personalInformation = PersonalInformation::first();

        return view('consulter.components.blogDetails',compact(
            'blog',
            'landingPage',
            'coverPhoto',
            'personalInformation',
        ));
    }
//-----------------------------------------projects-----------------------------------------
    public function projects()
    {
        $coverPhoto = CoverPhoto::first();
        $landingPage = LandingPage::first();
        $blog        = Blog::get();
        $personalInformation = PersonalInformation::first();
        $project = Project::get();
        return view('consulter.components.projects',
        compact(
            'project',
            'landingPage',
            'personalInformation',
            'blog',
            'coverPhoto'
        ));
    }
    public function project_details($slug)
    {
        $personalInformation = PersonalInformation::first();
        $landingPage = LandingPage::first();
        $blog        = Blog::get();
        $coverPhoto = CoverPhoto::first();
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('consulter.components.projectDetails',
        compact(
            'project',
            'landingPage',
            'personalInformation',
            'blog',
            'coverPhoto',
        ));
    }
//-----------------------------------------services-----------------------------------------
    public function services()
    {
        $service = Service::get();    
        $coverPhoto = CoverPhoto::first();
        $blog        = Blog::get();
        $landingPage = LandingPage::first();
        $personalInformation = PersonalInformation::first();
        $testimonial= Testimonial::get();
        return view('consulter.components.services',
    compact(
        'service',
        'coverPhoto',
            'landingPage',
            'personalInformation',
            'blog',
            'testimonial',
    )
    );
    }
    public function service_details($slug)
    {
        $landingPage = LandingPage::first();
        $personalInformation = PersonalInformation::first();
        $blog        = Blog::get();
        $coverPhoto = CoverPhoto::first();
        $service     = Service::where('slug', $slug)->firstOrFail();
        return view('consulter.components.serviceDetails', 
        compact(
            'coverPhoto',
            'landingPage',
            'personalInformation',
            'service',
            'blog',
        ));
    }
//-----------------------------------------team-----------------------------------------
    public function team()
    {
        $coverPhoto = CoverPhoto::first();
        $personalInformation = PersonalInformation::first();
        $landingPage = LandingPage::first();
        $team       = Team::get();
        $blog       = Blog::get();
        return view('consulter.components.team',
        compact(
        'personalInformation',
            'team',
            'coverPhoto',
            'landingPage',
            'blog',
            )
        );
    }
    public function team_details($slug)
    {
        $landingPage = LandingPage::first();
        $personalInformation = PersonalInformation::first();
        $coverPhoto = CoverPhoto::first();
        $team     = Team::where('slug', $slug)->firstOrFail();
        $blog     = Blog::get();
        return view('consulter.components.teamDetails',
        compact(
        'team',
        'coverPhoto',
        'personalInformation',
        'landingPage',
        'blog',
        )
    );
    }
    
}
