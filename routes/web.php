<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/pricing', [FrontendController::class, 'pricing'])->name('pricing');
Route::get('/client-reviews', [FrontendController::class, 'client_reviews'])->name('client-reviews');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/logo-maker', [FrontendController::class, 'logo_maker'])->name('logo.logo-maker');
Route::get('/3d-logo-design', [FrontendController::class, 'ddd_logo_design'])->name('logo.3d-logo-design');
Route::get('/animated-logo-design', [FrontendController::class, 'animated_logo_design'])->name('logo.animated-logo-design');
Route::get('/corporate-logo-design', [FrontendController::class, 'corporate_logo_design'])->name('logo.corporate-logo-design');
Route::get('/monogram-logo-design', [FrontendController::class, 'monogram_logo_design'])->name('logo.monogram-logo-design');
Route::get('/mascot-logo-design', [FrontendController::class, 'mascot_logo_design'])->name('logo.mascot-logo-design');
Route::get('/stationary-design', [FrontendController::class, 'stationary_design'])->name('branding.stationary-design');
Route::get('/brochure-design', [FrontendController::class, 'brochure_design'])->name('branding.brochure-design');
Route::get('/packaging-design', [FrontendController::class, 'packaging_design'])->name('branding.packaging-design');
Route::get('/branding-agency', [FrontendController::class, 'branding_agency'])->name('branding.branding-agency');
Route::get('/small-business-branding', [FrontendController::class, 'small_business_branding'])->name('branding.small-business-branding');
Route::get('/corporate-branding-development', [FrontendController::class, 'corporate_branding_development'])->name('branding.corporate-branding-development');
Route::get('/3d-animations', [FrontendController::class, 'ddd_animations'])->name('animation.ddd-animations');
Route::get('/2d-animations', [FrontendController::class, 'dd_animations'])->name('animation.dd-animations');
Route::get('/startup-video-production', [FrontendController::class, 'startup_video_production'])->name('animation.startup-video-production');
Route::get('/explainer-product-video-company', [FrontendController::class, 'explainer_product_video_company'])->name('animation.explainer-product-video-company');
Route::get('/animation-company', [FrontendController::class, 'animation_company'])->name('animation.animation-company');
Route::get('/whiteboard-animations', [FrontendController::class, 'whiteboard_animations'])->name('animation.whiteboard-animations');
Route::get('/content-marketing', [FrontendController::class, 'content_marketing'])->name('marketing.content-marketing');
Route::get('/search-engine-optimization', [FrontendController::class, 'search_engine_optimization'])->name('marketing.search-engine-optimization');
Route::get('/social-media-marketing', [FrontendController::class, 'social_media_marketing'])->name('marketing.social-media-marketing');
Route::get('/digital-marketing-agency', [FrontendController::class, 'digital_marketing_agency'])->name('marketing.digital-marketing-agency');
Route::get('/pay-per-click', [FrontendController::class, 'pay_per_click'])->name('marketing.pay-per-click');
Route::get('/email-marketing', [FrontendController::class, 'email_marketing'])->name('marketing.email-marketing');
Route::get('/brief', [FrontendController::class, 'brief'])->name('brief');

Route::post('/contactform', [FormController::class, 'contactform'])->name('contactform');
Route::post('/popupform', [FormController::class, 'popupform'])->name('popupform');
Route::post('/briefform', [FormController::class, 'briefform'])->name('briefform');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('backend.admin.dashboard');
    Route::get('/popup', [AdminController::class, 'popup'])->name('backend.admin.popup');
    Route::get('/briefpage', [AdminController::class, 'briefpage'])->name('backend.admin.briefpage');
    Route::delete('/entries/{id}', [AdminController::class, 'destroy'])->name('backend.admin.delete');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');