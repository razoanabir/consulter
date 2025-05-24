<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\Admin\Auth\adminLoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\CoverPhotoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\PotentialClientController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest:admin')->group(function () {


    Route::get('login', [adminLoginController::class, 'create'])
        ->name('admin.login');

    Route::post('login', [adminLoginController::class, 'store']);

    
});

Route::middleware('auth:admin')->group(function () {
    
    Route::get('logout', [adminLoginController::class, 'destroy'])
        ->name('admin.logout');
//dashboar controller
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');


// Mark a single notification as read
Route::get('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');

// Mark all notifications as read
Route::get('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.read.all');
//========================================Search-box================================================================================
    Route::get('admin/search', [SearchController::class, 'search'])->name('search');
    
//========================================Testimonial================================================================================
    Route::get('/view-testimonial',[TestimonialController::class, 'view'])->name('view.testimonial');
    Route::get('/add-testimonial',[TestimonialController::class, 'add'])->name('add.testimonial');
    Route::get('/edit-testimonial/{id}',[TestimonialController::class, 'edit'])->name('edit.testimonial');
    Route::post('/store-testimonial',[TestimonialController::class, 'store'])->name('store.testimonial');
    Route::post('/update-testimonial/{id}',[TestimonialController::class, 'update'])->name('update.testimonial');
    Route::get('/delete-testimonial/{id}',action: [TestimonialController::class, 'delete'])->name('delete.testimonial');

//========================================Team========================================================================================
    Route::get('/view-team',[TeamController::class, 'view'])->name('view.team');
    Route::get('/add-team',[TeamController::class, 'add'])->name('add.team');
    Route::get('/edit-team/{slug}',[TeamController::class, 'edit'])->name('edit.team');
    Route::post('/store-team',[TeamController::class, 'store'])->name('store.team');
    Route::post('/update-team/{id}',[TeamController::class, 'update'])->name('update.team');
    Route::get('/delete-team/{id}',action: [TeamController::class, 'delete'])->name('delete.team');

//========================================Pricing========================================================================================
    Route::get('/view-pricing',[PricingController::class, 'view'])->name('view.pricing');
    Route::get('/add-pricing',[PricingController::class, 'add'])->name('add.pricing');
    Route::get('/pricing-edit/{slug}',[PricingController::class, 'edit'])->name('edit.pricing');
    Route::post('/store-pricing',[PricingController::class, 'store'])->name('store.pricing');
    Route::post('/update-pricing/{id}',[PricingController::class, 'update'])->name('update.pricing');
    Route::get('/delete-pricing/{id}',action: [PricingController::class, 'delete'])->name('delete.pricing');

//========================================Service========================================================================================
    Route::get('/view-service',[ServiceController::class, 'view'])->name('view.service');
    Route::get('/add-service',[ServiceController::class, 'add'])->name('add.service');
    Route::get('/service-edit/{slug}',[ServiceController::class, 'edit'])->name('edit.service');
    Route::post('/store-service',[ServiceController::class, 'store'])->name('store.service');
    Route::post('/update-service/{id}',[ServiceController::class, 'update'])->name('update.service');
    Route::get('/delete-service/{id}',action: [ServiceController::class, 'delete'])->name('delete.service');

//========================================Category========================================================================================
    Route::get('/view-category',[CategoryController::class, 'view'])->name('view.category');
    Route::get('/add-category',[CategoryController::class, 'add'])->name('add.category');
    Route::get('/service-category/{slug}',[CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/store-category',[CategoryController::class, 'store'])->name('store.category');
    Route::post('/update-category/{id}',[CategoryController::class, 'update'])->name('update.category');
    Route::get('/delete-category/{id}',action: [CategoryController::class, 'delete'])->name('delete.category');

//========================================Project========================================================================================
    Route::get('/view-project',[ProjectController::class, 'view'])->name('view.project');
    Route::get('/add-project',[ProjectController::class, 'add'])->name('add.project');
    Route::get('/service-project/{slug}',[ProjectController::class, 'edit'])->name('edit.project');
    Route::post('/store-project',[ProjectController::class, 'store'])->name('store.project');
    Route::post('/update-project/{id}',[ProjectController::class, 'update'])->name('update.project');
    Route::get('/delete-project/{id}',action: [ProjectController::class, 'delete'])->name('delete.project');
    Route::post('/upload-project-images', [ProjectController::class, 'uploadProjectImages'])->name('upload.project.images');
    Route::post('/delete-project-image', [ProjectController::class, 'deleteProjectImage'])->name('delete.project.image');
    Route::post('/upload-images', [ProjectController::class, 'uploadImages'])->name('upload.images');

//========================================Blog========================================================================================
    Route::get('/view-blog',[BlogController::class, 'view'])->name('view.blog');
    Route::get('/add-blog',[BlogController::class, 'add'])->name('add.blog');
    Route::get('/service-blog/{slug}',[BlogController::class, 'edit'])->name('edit.blog');
    Route::post('/store-blog',[BlogController::class, 'store'])->name('store.blog');
    Route::post('/update-blog/{id}',[BlogController::class, 'update'])->name('update.blog');
    Route::get('/delete-blog/{id}',action: [BlogController::class, 'delete'])->name('delete.blog');

//========================================Cover-Photo========================================================================================
    Route::get('/view-cover-photo',[CoverPhotoController::class, 'view'])->name('view.cover.photo');
    Route::post('/store-cover-photo',[CoverPhotoController::class, 'store'])->name('store.cover.photo');

//========================================landing-Page========================================================================================
    Route::get('/view-landing-page',[LandingPageController::class, 'view'])->name('view.landing.page');
    Route::post('/store-landing-page',[LandingPageController::class, 'store'])->name('store.landing.page');

//========================================About-Page========================================================================================
    Route::get('/view-about-us',[AboutPageController::class, 'view'])->name('view.about');
    Route::post('/store-about-us',[AboutPageController::class, 'store'])->name('store.about');

//========================================Personal-Information========================================================================================
    Route::get('/view-personal-information',[PersonalInformationController::class, 'view'])->name('view.personal.information');
    Route::post('/store-personal-information',[PersonalInformationController::class, 'store'])->name('store.personal.information');

//==========================================edit-profile=====================================================================================
    Route::get('/view-edit-profile', [EditProfileController::class, 'settings'])->name('edit.profile');
    Route::post('/update-info/{id}',[EditProfileController::class, 'update_info'])->name('update.info');
    Route::post('/update-password/{id}',[EditProfileController::class, 'update_password'])->name('update.password');
    Route::post('/delete-admin-data/{id}',[EditProfileController::class, 'deleteAdminData'])->name('delete_admin_data');

//========================================Company-Information========================================================================================
    Route::get('/view-company-information',[CompanyInformationController::class, 'view'])->name('view.company.information');
    Route::get('/add-company-information',[CompanyInformationController::class, 'add'])->name('add.company.information');
    Route::get('/edit-company-information/{slug}',[CompanyInformationController::class, 'edit'])->name('edit.company.information');
    Route::post('/store-company-information',[CompanyInformationController::class, 'store'])->name('store.company.information');
    Route::post('/update-company-information/{id}',[CompanyInformationController::class, 'update'])->name('update.company.information');
    Route::get('/delete-company-information/{id}',action: [CompanyInformationController::class, 'delete'])->name('delete.company.information');
    Route::get('/details-company-information/{slug}',[CompanyInformationController::class, 'details'])->name('details.company.information');
    Route::post('/update-service-status/{id}',[CompanyInformationController::class, 'service_status'])->name('update.service.status');

//========================================Potential-Client========================================================================================
    Route::get('/view-potential-clients',[PotentialClientController::class, 'view'])->name('view.potential.client');
    Route::get('/add-potential-client',[PotentialClientController::class, 'add'])->name('add.potential.client');
    Route::get('/edit-potential-client/{slug}',[PotentialClientController::class, 'edit'])->name('edit.potential.client');
    Route::post('/store-potential-client',[PotentialClientController::class, 'store'])->name('store.potential.client');
    Route::post('/update-potential-client/{id}',[PotentialClientController::class, 'update'])->name('update.potential.client');
    Route::get('/delete-potential-client/{id}',action: [PotentialClientController::class, 'delete'])->name('delete.potential.client');
    Route::get('/details-potential-client/{slug}',[PotentialClientController::class, 'details'])->name('details.potential.client');

//========================================transactions-overview========================================================================================
    Route::post('/add-todays-money', [DashboardController::class, 'add_todays_money'])->name('add.todays.money');
    Route::post('/update-todays-money/{id}', [DashboardController::class, 'update_todays_money'])->name('update.todays.money');
    Route::get('/delete-todays-money/{id}', [DashboardController::class, 'delete_todays_money'])->name('delete.todays.money');

    Route::post('/add-todays-expense', [DashboardController::class, 'add_todays_expense'])->name('add.todays.expense');
    Route::post('/update-todays-expense/{id}', [DashboardController::class, 'update_todays_expense'])->name('update.todays.expense');
    Route::get('/delete-todays-expense/{id}', [DashboardController::class, 'delete_todays_expense'])->name('delete.todays.expense');

    Route::post('/add-payment-due', [DashboardController::class, 'add_payment_due'])->name('add.payment.due');
    Route::post('/update-payment-due/{id}', [DashboardController::class, 'update_payment_due'])->name('update.payment.due');
    Route::get('/delete-payment-due/{id}', [DashboardController::class, 'delete_payment_due'])->name('delete.payment.due');

});
