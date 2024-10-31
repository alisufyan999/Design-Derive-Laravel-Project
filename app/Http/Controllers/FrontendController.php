<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller{

    public function home(){
        return view('frontend.pages.home');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function pricing(){
        return view('frontend.pages.pricing');
    }

    public function client_reviews(){
        return view('frontend.pages.client-reviews');
    }

    public function portfolio(){
        return view('frontend.pages.portfolio');
    }

    public function logo_maker(){
        return view('frontend.pages.logo.logo_maker');
    }

    public function ddd_logo_design(){
        return view('frontend.pages.logo.3d_logo_design');
    }

    public function animated_logo_design(){
        return view('frontend.pages.logo.animated_logo_design');
    }

    public function corporate_logo_design(){
        return view('frontend.pages.logo.corporate_logo_design');
    }

    public function monogram_logo_design(){
        return view('frontend.pages.logo.monogram_logo_design');
    }

    public function mascot_logo_design(){
        return view('frontend.pages.logo.mascot_logo_design');
    }

    public function stationary_design(){
        return view('frontend.pages.branding.stationary_design');
    }

    public function brochure_design(){
        return view('frontend.pages.branding.brochure_design');
    }

    public function packaging_design(){
        return view('frontend.pages.branding.packaging_design');
    }

    public function branding_agency(){
        return view('frontend.pages.branding.branding_agency');
    }

    public function small_business_branding(){
        return view('frontend.pages.branding.small_business_branding');
    }

    public function corporate_branding_development(){
        return view('frontend.pages.branding.corporate_branding_development');
    }

    public function ddd_animations(){
        return view('frontend.pages.animation.ddd_animations');
    }

    public function dd_animations(){
        return view('frontend.pages.animation.dd_animations');
    }

    public function startup_video_production(){
        return view('frontend.pages.animation.startup_video_production');
    }

    public function explainer_product_video_company(){
        return view('frontend.pages.animation.explainer_product_video_company');
    }

    public function animation_company(){
        return view('frontend.pages.animation.animation_company');
    }

    public function whiteboard_animations(){
        return view('frontend.pages.animation.whiteboard_animations');
    }

    public function content_marketing(){
        return view('frontend.pages.marketing.content_marketing');
    }

    public function search_engine_optimization(){
        return view('frontend.pages.marketing.search_engine_optimization');
    }

    public function social_media_marketing(){
        return view('frontend.pages.marketing.social_media_marketing');
    }

    public function digital_marketing_agency(){
        return view('frontend.pages.marketing.digital_marketing_agency');
    }

    public function pay_per_click(){
        return view('frontend.pages.marketing.pay_per_click');
    }

    public function email_marketing(){
        return view('frontend.pages.marketing.email_marketing');
    }

    public function brief(){
        return view('frontend.pages.brief');
    }

}