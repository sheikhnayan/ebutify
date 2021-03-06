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
use App\Http\Controllers\SubscriptionController;
use App\Http\Middleware\FreelancerRoleEnsure;
use App\Http\Middleware\UserRoleEnsure;





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
    
Route::middleware([UserRoleEnsure::class])->group(function () {


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

    //  USER SUBSCIPTION PAGE
    Route::middleware(['auth:sanctum', 'verified'])->get('/subscriptions-billing', [UserController::class, 'SubscriptionsBilling'])->name('subscriptions-billing');

    Route::middleware(['auth:sanctum', 'verified'])->get('/cancel-subscription', [SubscriptionController::class, 'CancelSubscription'])->name('cancel-subscription');






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
});





Route::middleware([FreelancerRoleEnsure::class])->group(function () {


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
});






//  FRONT END

Route::get('/', [FrontendControllerController::class,'index']);

// Route::get('/pricing', function(){
//     return view('front.pricing');
// });

Route::post('/pricing', [FrontendControllerController::class, 'pricing'])->name('pricing');

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

Route::get('/super/subscription',[SuperAdminController::class, 'subscription']);

Route::get('/super/subcription_product/create',[SuperAdminController::class, 'CreateProduct']);

Route::post('/super/create/subsription',[SuperAdminController::class, 'CreateProductForReal']);

Route::get('super/subsciption/edit/{id}',[SuperAdminController::class, 'EditProduct']);

Route::post('super/edit/subsription',[SuperAdminController::class, 'EditProductForReal']);


Route::post('/super/create/subsription',[SuperAdminController::class, 'CreateProductForReal']);

Route::get('/super/customer', [SuperAdminController::class, 'customer']);
Route::get('/super/customer/edit/{id}', [SuperAdminController::class, 'customer_edit']);
Route::post('/super/customer/update/{id}', [SuperAdminController::class, 'customer_update']);
Route::post('/super/customer/password-change/{id}', [SuperAdminController::class, 'customer_password_update']);
Route::get('/super/customer/delete/{id}', [SuperAdminController::class, 'customer_delete']);
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
Route::get('/super/logos', [SuperAdminController::class, 'logos']);
Route::post('/super/logo', [SuperAdminController::class, 'logo_update']);
Route::get('/super/tutorials', [SuperAdminController::class, 'tutorials']);
Route::get('/super/tutorials/create', [SuperAdminController::class, 'tutorial_create']);
Route::post('/super/tutorials', [SuperAdminController::class, 'tutorial_store']);
Route::get('/super/tutorials/edit/{id}', [SuperAdminController::class, 'tutorial_edit']);
Route::post('/super/tutorials/update/{id}', [SuperAdminController::class, 'tutorial_update']);
Route::get('/super/tutorials/delete/{id}', [SuperAdminController::class, 'tutorial_delete']);

Route::get('/super/quickstart', [SuperAdminController::class, 'quickstart']);
Route::get('/super/quickstart/create', [SuperAdminController::class, 'quickstart_create']);
Route::post('/super/quickstart', [SuperAdminController::class, 'quickstart_store']);
Route::get('/super/quickstart/edit/{id}', [SuperAdminController::class, 'quickstart_edit']);
Route::post('/super/quickstart/update/{id}', [SuperAdminController::class, 'quickstart_update']);
Route::get('/super/quickstart/delete/{id}', [SuperAdminController::class, 'quickstart_delete']);

// Route::post('/super/logo', [SuperAdminController::class, 'logo_update']);
Route::post('/super/favicon', [SuperAdminController::class, 'favicon_update']);
Route::get('/super/terms-condition', [SuperAdminController::class, 'terms_conditions']);
Route::post('/super/terms-condition/update', [SuperAdminController::class, 'terms_conditions_update']);
Route::get('/super/privacy-policy', [SuperAdminController::class, 'privacy_policy']);
Route::post('/super/privacy-policy/update', [SuperAdminController::class, 'privacy_policy_update']);
Route::get('/super/return-policy', [SuperAdminController::class, 'refund_policy']);
Route::post('/super/return-policy/update', [SuperAdminController::class, 'refund_policy_update']);
Route::get('/super/blog/category/create', [SuperAdminController::class, 'category']);
Route::post('/super/blog/category', [SuperAdminController::class, 'category_store']);
Route::get('/super/blog/category', [SuperAdminController::class, 'category_index']);
Route::get('/super/blog/category/edit/{id}', [SuperAdminController::class, 'category_edit']);
Route::get('/super/blog/category/delete/{id}', [SuperAdminController::class, 'category_delete']);
Route::post('/super/blog/category/update/{id}', [SuperAdminController::class, 'category_update']);









//  SUPER ADMIN DELETE EXPLORE PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('product-delete-explo/{id}', [SuperAdminController::class, 'DeleteProductExplo'])->name('product-delete-explo');

//  SUPER ADMIN  VIEW ALL PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/super/all-products', [SuperAdminController::class, 'AllProduct'])->name('super/all-products');

//  SUPER ADMIN UPLOAD PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('super/upload-page', [SuperAdminController::class, 'UploadProduct'])->name('super/upload-page');

Route::middleware(['auth:sanctum', 'verified'])->get('super/upload-ali-page', [SuperAdminController::class, 'UploadAliProduct'])->name('super/upload-ali-page');

Route::middleware(['auth:sanctum', 'verified'])->get('super/upload-amazon-page', [SuperAdminController::class, 'UploadAmazonProduct'])->name('super/upload-amazon-page');

//  SUPER ADMIN DELETE PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('product-delete/{id}', [SuperAdminController::class, 'DeleteProductExplo'])->name('product-delete');

//  SUPER ADMIN EXPLORE PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/super/exlore-products', [SuperAdminController::class, 'ExploreProduct'])->name('super/exlore-products');

//  SUPER ADMIN EXPLORE AMAZON PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/super/amazon-products', [SuperAdminController::class, 'AmazonProduct'])->name('super/amazon-products');

Route::middleware(['auth:sanctum', 'verified'])->get('/super/amazon-edit-products/{id}', [SuperAdminController::class, 'amazonProductEdit'])->name('super/amazon-edit-products');

//  SUPER ADMIN STORE PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/super/store-products', [SuperAdminController::class, 'exploreShopifyProduct'])->name('super/store-products');

//  SUPER ADMIN SUBSCRIPTION PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/super/subscriber', [SuperAdminController::class, 'Subscriber'])->name('super/subscriber');

//  SUPER ADMIN SUBSCRIPTION PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/super/category', [SuperAdminController::class, 'SupCategory'])->name('super/category');

// SUPER ADMIN VIEW SHOPIFY EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/shopify-edit/{id}', [SuperAdminController::class, 'shopifyEdit'])->name('shopify-edit');

// SUPER ADMIN ADD CATEGORY
Route::middleware(['auth:sanctum', 'verified'])->get('/sup-add-category', [SuperAdminController::class, 'AddSupCategory'])->name('sup-add-category');

// SUPER ADMIN VIEW SHOPIFY EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/super/category-add', [SuperAdminController::class, 'SupCategoryAdd'])->name('super/category-add');

Route::post('/sup/category', [SuperAdminController::class, 'SupCategoryAdd']);
Route::get('/sup/category/edit/{id}', [SuperAdminController::class, 'SupCategoryEdit'])->name('edit-sup-category');
Route::post('/sup/category/update/{id}', [SuperAdminController::class, 'CategoryUpdate'])->name('update-sup-category');

// SUPER ADMIN VIEW SHOPIFY EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/super/freelancers-list', [SuperAdminController::class, 'SupFreelancerList'])->name('super/freelancers-list');

// SUPER ADMIN VIEW SHOPIFY EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/super/add-new-freelancer', [SuperAdminController::class, 'AddNewFreelancer'])->name('super/add-new-freelancer');

Route::middleware(['auth:sanctum', 'verified'])->post('/super/add-new-freelancer-for-real', [SuperAdminController::class, 'AddNewFreelancerForReal'])->name('super/add-new-freelancer-for-real');


Route::middleware(['auth:sanctum', 'verified'])->get('/sup-product-edit/{id}', [SuperAdminController::class, 'SupEditAll'])->name('sup-product-edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/super-admin-ali-edit/{id}', [SuperAdminController::class, 'SupEditAli'])->name('super-admin-ali-edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/sup-product-edit/{id}', [SuperAdminController::class, 'SupEditAll'])->name('sup-product-edit');

Route::get('/super/freelancer/status/{id}/deactivate', [SuperAdminController::class, 'FreelancerDeactive']);
Route::get('/super/freelancer/status/{id}/activate', [SuperAdminController::class, 'FreelancerActive']);



// SUPER ADMIN END