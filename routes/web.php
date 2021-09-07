<?php

use Illuminate\Support\Facades\Route;
use App\Models\FAQ;
use App\Models\TermsAndCondition;
use App\Models\PrivacyAndPolicy;
use App\Models\RefundPolicy;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\UserExploreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FrontendControllerController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['middleware' => ['auth:sanctrum']], function(){

// })

//  USER DASHBOARD VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//  FREELANCER DASHBOARD VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [FreelancerController::class, 'dashboard'])->name('freelancer-dashboard');

//  LOGOUT
Route::get('/logout', [FreelancerController::class, 'logoutFreelancer'])->name('logout');

//  WORK REPORT VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/work-report', [FreelancerController::class, 'workReportFreelancer'])->name('work-report');

//  MESSAGE VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/message', [FreelancerController::class, 'message'])->name('message');

//  PROFILE USER
Route::middleware(['auth:sanctum', 'verified'])->get('/userprofile', [UserController::class, 'profile'])->name('myprofile');

//  USER PROFILE UPDATE
Route::middleware(['auth:sanctum', 'verified'])->post('/user-profile-update',[UserController::class, 'profileupdate']);

//  USER PASSWORD CHANGE
Route::middleware(['auth:sanctum', 'verified'])->post('/user-password-cahnge',[UserController::class, 'passwordchange']);

//  PROFILE FREELANCER
Route::middleware(['auth:sanctum', 'verified'])->get('/freelancer-profile', [UserController::class, 'freelancerProfile'])->name('freelancer-profile');


//  SUBSRIBE FOR USER
Route::post('/subscribe', [FreelancerController::class,'subscribe'])->name('subscribe');

//  USER DOWNLOAD GIF
Route::get('/downloadGIF/{gifs}', [UserController::class, 'downloadGIF'])->name('downloadGIF');

// Route::get('/downloadGIF/{gifs}', [UserController::class, 'downloadGIF'])->name('downloadGIF');

//  USER BILLING PORTAL
Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal('billing')->name('billing-portal');
});

//  USER VIEW TRENDING PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/trending-products', [UserController::class, 'trendingProducts'])->name('trending-products');

//  USER TRENDING PRODUCT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/product-details/{product_id}', [UserController::class, 'trendingProductDetails'])->name('product-details');

//  USER VIEW FB AD PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/fb-ad-products', [UserController::class, 'fbAdProducts'])->name('fb-ad-products');

//  USER VIEW ALL PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-product', [UserController::class, 'allProduct'])->name('all-product');

//  USER ALL PRODUCT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-product-details/{product_id}', [UserController::class, 'allProductDetails'])->name('all-product-details');

//  USER VIEW UNTAPPED PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/untapped-product', [UserController::class, 'untappedProducts'])->name('untapped-product');

//  USER VIEW ALI EXPRESS PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/ali-product', [UserExploreController::class, 'exploreAli'])->name('ali-product');

//  USER VIEW AMAZON PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/amz-product', [UserExploreController::class, 'exploreAmz'])->name('amz-product');

//  USER VIEW STORE PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/store-product', [UserExploreController::class, 'exploreStore'])->name('store-product');

//  USER VIEW TUTORIAL
Route::middleware(['auth:sanctum', 'verified'])->get('/tutorial', [UserController::class, 'viewTutorial'])->name('tutorial');

//  USER VIEW FAQ
Route::middleware(['auth:sanctum', 'verified'])->get('/FAQ', [UserController::class, 'viewFAQ'])->name('FAQ');

//  USER VIEW CONTACT US
Route::middleware(['auth:sanctum', 'verified'])->get('/contact-us-user', [UserController::class, 'viewContactUs'])->name('contact-us');

//  USER SEND EMAIL
Route::middleware(['auth:sanctum', 'verified'])->post('/send-email', [ContactController::class, 'contact'])->name('send-email');

//  USER SEARCH
Route::middleware(['auth:sanctum', 'verified'])->post('/search-all-product', [UserController::class, 'allProduct'])->name('search');

//  # USER SERVICES START #

//  USER SERVICE DASHBOARD
Route::middleware(['auth:sanctum', 'verified'])->get('/service-dashboard', [UserServiceController::class, 'serviceDashboard'])->name('service-dashboard');

//  USER EBUTIFY SERVICES
Route::middleware(['auth:sanctum', 'verified'])->get('/ebutify-services', [UserServiceController::class, 'ebutifyServices'])->name('ebutify-services');

//  USER VIEW SER
Route::middleware(['auth:sanctum', 'verified'])->get('/view-services', [UserServiceController::class, 'viewServices'])->name('view-services');

//  USER ALL PROJECTS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-projects', [UserServiceController::class, 'allProjects'])->name('all-projects');

//  USER PROJECT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/project-details', [UserServiceController::class, 'allProjectsDetails'])->name('project-details');

//  USER PLACE ORDER
Route::middleware(['auth:sanctum', 'verified'])->get('/place-order', [OrderController::class, 'placeOrder'])->name('place-order');

//  USER PLACE CUSTOM ORDER
Route::middleware(['auth:sanctum', 'verified'])->get('/place-custom-order', [OrderController::class, 'placeCustomOrder'])->name('place-custom-order');

//  USER PLACE ORDER PART TWO
Route::middleware(['auth:sanctum', 'verified'])->get('/place-order-%2', [OrderController::class, 'placeCustomOrderStep2'])->name('/place-order-%2');

//  USER DOWNLOAD VIDEO
Route::middleware(['auth:sanctum', 'verified'])->get('/downloadVid/{video}', [UserController::class, 'downloadVid'])->name('downloadVid');






//  FREELANCER PROFILE
Route::middleware(['auth:sanctum', 'verified'])->get('/profile', [FreelancerController::class, 'profile'])->name('profile');

//  FREELANCER UPDATE PROFILE
Route::middleware(['auth:sanctum', 'verified'])->get('/update-profile', [FreelancerController::class, 'updateProfile'])->name('update-profile');

//  FREELANCER UPDATE PASSWORD
Route::middleware(['auth:sanctum', 'verified'])->post('/update-password', [FreelancerController::class, 'updatePassword'])->name('update-password');

//  FREELANCER PRODUCT RESEARCH
Route::middleware(['auth:sanctum', 'verified'])->get('/product-research', [ProductController::class, 'productResearch'])->name('product-research');

//  FREELANCER VIEW PRODUCT-UPLOAD-PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/uploadPage', [ProductController::class, 'uploadPage'])->name('uploadPage');

//  FREELANCER UPLOAD PRODUCT
Route::post('/uploadProduct', [ProductController::class, 'uploadProduct'])->name('uploadProduct');

Route::post('/fileUpload', [FileUploadController::class, 'upload']);

// FREELANCER EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product-edit');

//  FREELANCER UPDATE PRODUCT
Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('productUpdate');

// FREELANCER VIEW AMAZON EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/amazon-product-edit/{id}', [ProductController::class, 'amazonProductEdit'])->name('amazon-product-edit');

//  FREELANCER AMAZON UPDATE PRODUCT
Route::post('/amazon-product-update', [ProductController::class, 'amazonProductUpdate'])->name('amazon-product-update');

// FREELANCER VIEW ALI EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/ali-product-edit/{id}', [ProductController::class, 'aliProductEdit'])->name('ali-product-edit');

//  FREELANCER ALI UPDATE PRODUCT
Route::post('/ali-product-update', [ProductController::class, 'aliProductUpdate'])->name('ali-product-update');

// FREELANCER VIEW SHOPIFY EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/shopify-product-edit/{id}', [ProductController::class, 'shopifyProductEdit'])->name('shopify-product-edit');

//  FREELANCER SHOPIFY UPDATE PRODUCT
Route::post('/shopify-product-update', [ProductController::class, 'shopifyProductUpdate'])->name('shopify-product-update');

//  FREELANCER VIEW ALI EXPRESS PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/ali-express-products', [ExploreController::class, 'exploreAliProduct'])->name('ali-express-products');

//  FREELANCER VIEW UPLOAD ALI EXPRESS PRODUCTS PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/add-new-ali', [ExploreController::class, 'uploadAliPage'])->name('add-new-ali');

//  FREELANCER UPLOAD ALI EXPRESS PRODUCTS
Route::post('/upload-ali', [ExploreController::class, 'uploadAli'])->name('upload-ali');

//  FREELANCER VIEW AMAZON PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/amazon-products', [ExploreController::class, 'exploreAmazonProduct'])->name('amazon-products');

//  FREELANCER VIEW UPLOAD AMAZON PRODUCTS PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/add-new-amz', [ExploreController::class, 'uploadAmazonPage'])->name('add-new-amz');

//  FREELANCER UPLOAD AMAZON PRODUCTS
Route::post('/upload-amazon', [ExploreController::class, 'uploadAmazon'])->name('upload-amazon');

//  FREELANCER VIEW SHOPIFY PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/shopify-products', [ExploreController::class, 'exploreShopifyProduct'])->name('shopify-products');

//  FREELANCER VIEW UPLOAD SHOPIFY PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/add-new-shopify', [ExploreController::class, 'uploadShopifyPage'])->name('add-new-shopify');

//  FREELANCER UPLOAD SHOPIFY PRODUCTS
Route::post('/upload-shopify', [ExploreController::class, 'uploadShopify'])->name('upload-shopify');

//  FREELANCER UPLOAD SHOPIFY PRODUCTS
Route::get('/freelancer-project', function () {
    return view('freelancer.freelancer-project');
});

//  FREELANCER UPLOAD SHOPIFY PRODUCTS
Route::get('/freelancer-project-detail', function () {
    return view('freelancer.freelancer-project-detail');
});






//  FRONT END

Route::get('/', [FrontendControllerController::class,'index']);

Route::get('/pricing', function(){
    return view('front.pricing');
});
Route::get('/privacy-policy', function(){
    $data = PrivacyAndPolicy::where('id',1)->first();
    return view('front.privacy-policy',compact('data'));
});
Route::get('/contact-us', function(){
    return view('front.contact-us');
});
Route::get('/about', function(){
    return view('front.about');
});
Route::post('/contact-form', [FrontendControllerController::class, 'contact']);



// BLOG FRONTEND
Route::get('/blog', [FrontendControllerController::class, 'blog']);
Route::get('/blog/{id}', [FrontendControllerController::class,'single_blog']);
Route::get('/category/{id}', [FrontendControllerController::class,'category']);
Route::get('/author/{id}', [FrontendControllerController::class,'author']);
Route::get('/our-team', function(){
    return view('front.about_our-team');
});
// END BLOG FRONTEND



Route::get('/contact-us', function(){
    return view('front.contact-us');
});
Route::get('/refund-policy', function(){

    $data = RefundPolicy::where('id',1)->first();
    return view('front.refund-policy',compact('data'));
});
Route::get('/terms-and-conditions', function(){
    $data = TermsAndCondition::where('id',1)->first();
    return view('front.terms-and-conditions',compact('data'));
})->name('terms-and-conditions');
Route::get('/faq', function(){

    $data = FAQ::latest()->get();
    return view('front.faq',compact('data'));
});
Route::get('/sign-up_1', function(){
    return view('front.sign-up_1.html');
});
// END FRONT END

// SUPER ADMIN START

Route::get('/super', [SuperAdminController::class, 'index']);

Route::get('/super/blog/create', [SuperAdminController::class, 'blog']);
Route::post('/super/blog', [SuperAdminController::class, 'store']);
Route::get('/super/blog', [SuperAdminController::class, 'blog_index']);
Route::get('/super/blog/edit/{id}', [SuperAdminController::class, 'blog_edit']);
Route::post('/super/blog/update/{id}', [SuperAdminController::class, 'blog_update']);
Route::get('/super/blog/delete/{id}', [SuperAdminController::class, 'blog_delete']);
Route::get('/super/faq/create', [SuperAdminController::class, 'faq']);
Route::post('/super/faq', [SuperAdminController::class, 'faq_store']);
Route::get('/super/faq', [SuperAdminController::class, 'faq_index']);
Route::get('/super/faq/edit/{id}', [SuperAdminController::class, 'faq_edit']);
Route::post('/super/faq/update/{id}', [SuperAdminController::class, 'faq_update']);
Route::get('/super/faq/delete/{id}', [SuperAdminController::class, 'faq_delete']);
Route::get('/super/review/create', [SuperAdminController::class, 'review']);
Route::post('/super/review', [SuperAdminController::class, 'review_store']);
Route::get('/super/review', [SuperAdminController::class, 'review_index']);
Route::get('/super/review/edit/{id}', [SuperAdminController::class, 'review_edit']);
Route::post('/super/review/update/{id}', [SuperAdminController::class, 'review_update']);
Route::get('/super/review/delete/{id}', [SuperAdminController::class, 'review_delete']);
Route::get('/super/homepage', [SuperAdminController::class, 'homepage']);
Route::post('/super/homepage/{id}', [SuperAdminController::class, 'homepage_update']);
Route::get('/super/terms-condition', [SuperAdminController::class, 'terms_conditions']);
Route::post('/super/terms-condition/update', [SuperAdminController::class, 'terms_conditions_update']);
Route::get('/super/privacy-policy', [SuperAdminController::class, 'privacy_policy']);
Route::post('/super/privacy-policy/update', [SuperAdminController::class, 'privacy_policy_update']);
Route::get('/super/return-policy', [SuperAdminController::class, 'refund_policy']);
Route::post('/super/return-policy/update', [SuperAdminController::class, 'refund_policy_update']);
Route::get('/super/category/create', [SuperAdminController::class, 'category']);
Route::post('/super/category', [SuperAdminController::class, 'category_store']);
Route::get('/super/category', [SuperAdminController::class, 'category_index']);
Route::get('/super/category/edit/{id}', [SuperAdminController::class, 'category_edit']);
Route::post('/super/category/update/{id}', [SuperAdminController::class, 'category_update']);



// SUPER ADMIN END
