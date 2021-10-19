<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Homepage;
use App\Models\Logo;
use App\Models\User;
use App\Models\FAQ;
use App\Models\Review;
use App\Models\Tutorial;
use App\Models\QuickStart;
use App\Models\TermsAndCondition;
use App\Models\ShopifyProduct;
use App\Models\PrivacyAndPolicy;
use App\Models\RefundPolicy;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\ProductDetail;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Hash;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Gender;
use App\Models\Country;
use App\Models\FileName;
use App\Models\GifName;
use App\Models\GifName2;
use App\Models\GifName3;
use App\Models\StripeProduct;



use Validator;



class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('super-admin');
    }
    public function index()
    {
            return view('admin.index');       
    }

    /**
     * Change the Image for Homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        $homepage = Homepage::all();
        return view('admin.homepage',compact('homepage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->image != null)
        {
        $path = $request->image->store('blog/uploads', 'public');
        }
        $add = new Blog;
        $add->heading = $request->heading;
        $add->image = $path;
        $add->body = $request->editor;
        if($request->popular == "false"){
            $add->popular = 'false';    
        }else{
            $add->popular = 0;
        }
        if($request->featured == 'false'){
            $add->featured = 'false';    
        }else{
            $add->featured = 0;
        }
        $add->category_id = $request->category_id;
        $add->tags = $request->tags;
        $add->created_by = Auth::user()->id;
        $add->save();

        return redirect()->back()->with('status', 'Blog created successfully');
    }

    /**
     * Update the specified resource of homepage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function homepage_update(Request $request, $id)
    {

        $path = $request->image->store('homepage/uploads', 'public');

        $update = Homepage::where('id',$id)->update([
            'image' => $path
        ]);

        return redirect()->back()->with('status','HomePage Image Changed Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logos()
    {
        $data = Logo::all();

        return view('admin.logos',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logo_update(Request $request)
    {
        $path = $request->image->store('site', 'public');

        $update = Logo::where('id','1')->update([
            'url' => $path
        ]);

        return redirect()->back()->with('status','Site Logo Changed Successfully');
    }

    public function favicon_update(Request $request)
    {
        $path = $request->image->store('site', 'public');

        $update = Logo::where('id','1')->update([
            'favicon' => $path
        ]);

        return redirect()->back()->with('status','Site Logo Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function blog()
    {
        $category = BlogCategory::all();
        return view('admin.blog-create',compact('category'));
    }

    public function blog_index(){
        $blog = Blog::join('users','users.id','blogs.created_by')
        ->join('blog_categories','blog_categories.id','blogs.category_id')
        ->select('blogs.*','users.name','blog_categories.category_name')
        ->latest()->get();
        return view('admin.blog-index',compact('blog'));
    }

    public function blog_edit($id){
        $category = BlogCategory::all();
        $data = Blog::where('id', $id)->first();

        return view('admin.blog-create',compact('data','category'));
    }

    public function blog_update(Request $request,$id){
        if($request->popular == 'false' or $request->popular == '0'){
            $popular = 'false';    
        }else{
            $popular = 0;
        }
        if($request->featured == 'false' or $request->featured == '0'){
            $featured = 'false';    
        }else{
            $featured = 0;
        }

        if(isset($request->image)){
            $path = $request->image->store('blog/uploads', 'public');

            $update = Blog::where('id', $id)->update([
                'heading' => $request->heading,
                'image' => $path,
                'body' => $request->editor,
                'featured' => $featured,
                'popular' => $popular,
                'tags' => $request->tags,
                'category_id' =>$request->category_id
            ]);
            }else{
                $update = Blog::where('id', $id)->update([
                    'heading' => $request->heading,
                    'body' => $request->editor,
                    'featured' => $featured,
                    'popular' => $popular,
                    'tags' => $request->tags,
                    'category_id' =>$request->category_id
                ]);
            }
            return redirect()->back()->with('status', 'Blog updated successfully');
    }

    public function blog_delete($id){
        $delete = Blog::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'Blog Deleted Successfully!');
    }

    public function faq_index()
    {
        $data = FAQ::all();
        return view('admin.faq-index',compact('data'));
    }

    public function faq()
    {
        return view('admin.faq-create');
    }

    public function faq_store(Request $request)
    {   
        $add = new FAQ;
        $add->faq_question = $request->faq_question;
        $add->faq_answer = $request->faq_answer;
        $add->save();

        return redirect()->back()->with('status', 'FAQ created successfully');
    }

    public function faq_edit($id){

        $data = FAQ::where('id', $id)->first();

        return view('admin.faq-create',compact('data'));
    }

    public function faq_update(Request $request,$id){

        $update = FAQ::where('id', $id)->update([
            'faq_question' => $request->faq_question,
            'faq_answer' => $request->faq_answer,
            ]);

        return redirect()->back()->with('status', 'FAQ updated successfully');
    }

    public function faq_delete($id){
        $delete = FAQ::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'FAQ Deleted Successfully!');
    }

    public function review_index()
    {
        $data = Review::all();
        return view('admin.review-index',compact('data'));
    }

    public function review()
    {
        return view('admin.review-create');
    }

    public function review_store(Request $request)
    {   

        if(isset($request->image)){
            $path = $request->image->store('review/uploads', 'public');
        }

        $add = new Review;
        $add->name = $request->name;
        $add->designation = $request->designation;
        $add->review = $request->review;
        if(isset($request->image)){
        $add->image = $path;
        }
        $add->save();

        return redirect()->back()->with('status', 'Review created successfully');
    }

    public function review_edit($id){

        $data = Review::where('id', $id)->first();

        return view('admin.review-create',compact('data'));
    }

    public function review_update(Request $request,$id){

        $old = Review::where('id', $id)->first();

        if(isset($request->image)){
            $path = $request->image->store('review/uploads', 'public');
        }else{
            $path = $old->image;
        }

        $update = Review::where('id', $id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'image' => $path,
            ]);

        return redirect()->back()->with('status', 'Review updated successfully');
    }

    public function review_delete($id){
        $delete = Review::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'Review Deleted Successfully!');
    }


    public function terms_conditions(){

        $data = TermsAndCondition::where('id',1)->first();

        return view('admin.terms-condition-index',compact('data'));
    }

    public function terms_conditions_update(Request $request){

        $add = TermsAndCondition::where('id',1)->update([
            'content' => $request->editor
        ]);

        return redirect()->back()->with('status','Terms & Conditions Updated Successfully!');
    }

    public function privacy_policy(){

        $data = PrivacyAndPolicy::where('id',1)->first();

        return view('admin.privacy-policy-index',compact('data'));
    }

    public function privacy_policy_update(Request $request){

        $add = PrivacyAndPolicy::where('id',1)->update([
            'content' => $request->editor
        ]);

        return redirect()->back()->with('status','Privacy & Policy Updated Successfully!');
    }

    public function refund_policy(){

        $data = RefundPolicy::where('id',1)->first();

        return view('admin.refund-policy-index',compact('data'));
    }

    public function refund_policy_update(Request $request){

        $add = RefundPolicy::where('id',1)->update([
            'content' => $request->editor
        ]);

        return redirect()->back()->with('status','Refund Policy Updated Successfully!');
    }

    public function category_index(){

        $data = BlogCategory::latest()->get();

        return view('admin.category-index',compact('data'));
    }

    public function category()
    {
        return view('admin.category-create');
    }

    public function category_store(Request $request)
    {   

        $add = new BlogCategory;
        $add->category_name = $request->name;
        $add->save();

        return redirect()->back()->with('status', 'Blog Category created successfully');
    }

    public function category_edit($id){

        $data = BlogCategory::where('id', $id)->first();

        return view('admin.category-create',compact('data'));
    }

    public function category_delete($id){

        $data = BlogCategory::where('id', $id)->delete();

        return back();
    }

    public function category_update(Request $request,$id){

        $update = BlogCategory::where('id', $id)->update([
            'category_name' => $request->name,
        ]);

        return redirect()->back()->with('status', 'Blog Category updated successfully');
    }

    public function tutorials()
    {
        $data = Tutorial::all();
        return view('admin.tutorials-index',compact('data'));
    }

    public function  tutorial_create()
    {
        return view('admin.tutorials-create');
    }

    public function tutorial_store(Request $request)
    {   
        if(isset($request->url)){
            $path = $request->url->store('tutorials/uploads', 'public');
        }

        $add = new Tutorial;
        $add->title = $request->title;
        $add->type = $request->type;
        $add->url = $path;
        $add->save();

        return redirect()->back()->with('status', 'Tutorial created successfully');
    }

    public function tutorial_edit($id){

        $data = Tutorial::where('id', $id)->first();

        return view('admin.tutorials-create',compact('data'));
    }

    public function tutorial_update(Request $request,$id){

        $old = Tutorial::where('id', $id)->first();

        if(isset($request->url)){
            $path = $request->url->store('tutorials/uploads', 'public');
        }else{
            $path = $old->url;
        }

        $update = Tutorial::where('id', $id)->update([
            'title' => $request->title,
            'type' => $request->type,
            'url' => $path

            ]);

        return redirect()->back()->with('status', 'Tutorial updated successfully');
    }

    public function tutorial_delete($id){
        $delete = Tutorial::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'Tutorial Deleted Successfully!');
    }


    // SHOVON WORKING HERE
    public function AllProduct(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        if($request->search) {
            $trendingProducts = ProductDetail::where('product_name', 'LIKE', '%'.$request->search.'%')->whereNull('explore_pro_type')->orderBy('created_at','DESC')->paginate(50);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::whereNull('explore_pro_type')->orderBy('created_at','DESC')->paginate(50);
        }
  
        foreach ($trendingProducts as $trendingproduct) {

            $country = $trendingproduct->country.",";

        }

        if (empty($country)) {
            return view('super_admin.sup-all-product',compact('trendingProducts','realCategory'));

        }else{

            return view('super_admin.sup-all-product',compact('trendingProducts','country','realCategory'));
        }

            return view('super_admin.sup-all-product',compact('trendingProducts','country','realCategory'));

    }

    public function UploadAliProduct(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        $productDetails = ProductDetail::all();

        return view('super_admin.super-admin-add-ali-products',compact('productDetails','realCategory'));
    }
    public function UploadAmazonProduct(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        $productDetails = ProductDetail::all();

        return view('super_admin.super-admin-add-amazon-products',compact('productDetails','realCategory'));
    }

    public function UploadProduct(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        $productDetails = ProductDetail::all();

        return view('super_admin.super-admin-add-products',compact('productDetails','realCategory'));
    }

    public function DeleteProduct($id)
    {
        $realCategory = Category::whereNotNull('id')->get();

        ProductDetail::where('id', $id)->delete();
        $trendingProducts = ProductDetail::whereNull('explore_pro_type')->paginate(50);
        return view('super_admin.sup-all-product',compact('trendingProducts','realCategory'));

    }

    public function DeleteProductExplo($id)
    {
        // dd('tor mayre chudi');
        ProductDetail::where('id', $id)->delete();

        return redirect()->back()->with('message','DELETED');

    }

    public function ExploreProduct(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        if($request->search) {
            // dd($request->search);
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE','%ali_express%')->where('product_name', 'LIKE', '%'.$request->search.'%')->orderBy('created_at','DESC')->paginate(50);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE','%ali_express%')->orderBy('created_at','DESC')->paginate(50);
        }
        return view('super_admin.super-admin-explore',compact('trendingProducts','realCategory'));
    }

    public function AmazonProduct(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        if($request->search) {
            // dd($request->search);
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE','%amazon%')->where('product_name', 'LIKE', '%'.$request->search.'%')->orderBy('created_at','DESC')->paginate(50);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE','%amazon%')
                                            ->orderBy('created_at','DESC')
                                            ->paginate(50);
        }
        return view('super_admin.super-admin-explore-amazon',compact('trendingProducts','realCategory'));
    }

    public function amazonProductEdit($id)
    {
        $realCategory = Category::whereNotNull('id')->get();

        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ProductDetail::find($id);
        
        $productImages = ProductImage::firstWhere('product_detail_id', $id);
         
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        


        //  FETCH SELECTED OPPORTUNITY DATA
        $opportunitys = $productDetails->opportunity_level;

        $containsT = Str::contains($opportunitys, 'trending_product');
        $containsF = Str::contains($opportunitys, 'facebook_ads');
        $containsU = Str::contains($opportunitys, 'untapped_product');


        //  FETCH SELECTED GENDER DATA
        $gender = $productDetails->gender;
        
        $containsMen = Str::contains($gender, 'Men');
        $containsWomen = Str::contains($gender, 'Women');
        $containsBaby = Str::contains($gender, 'Baby');
        $containsUnisex = Str::contains($gender, 'Unisex');


        //  FETCH SELECTED AGE DATA
        $customerAge = $productDetails->age;

        $containsUnder18   = Str::contains($customerAge, 'Under 18');
        $containsUnder1824 = Str::contains($customerAge, '18-24');
        $containsUnder2534 = Str::contains($customerAge, '25-34');
        $containsUnder3444 = Str::contains($customerAge, '34-44');
        $containsUnder4554 = Str::contains($customerAge, '45-54');
        $containsUnder5564 = Str::contains($customerAge, '55-64');
        $containsUnder65   = Str::contains($customerAge, '65+');

        //  FETCH SELECTED CATEGORY DATA
        $category = $productDetails->category;

        $containsBAC = Str::contains($category, 'Bike Accessories');
        $containsMAC = Str::contains($category, 'Mobile Accessories');
        $containsBS = Str::contains($category, 'Bag\'s & Shoes');
        $containsOD = Str::contains($category, 'Outdoor');
        $containsBH = Str::contains($category, 'Beauty Hair');

        $containsJW = Str::contains($category, 'Jewellery');
        $containsKH = Str::contains($category, 'Kitchen & household');
        $containsCUC = Str::contains($category, 'Computer Accessories');
        $containsELE = Str::contains($category, 'Electronics');
        $containsGIM = Str::contains($category, 'Garden Improvement');
        $containsMFA = Str::contains($category, 'Man\'s Fashion');

        $containsWf = Str::contains($category, ' Women\'s Fashion');
        $containsHB = Str::contains($category, 'Health & Beauty');
        $containsBK = Str::contains($category, 'Baby & Kids');
        $containsFIT = Str::contains($category, 'Fitness');
        $containsCA = Str::contains($category, 'Car Accessories');
        $containsHG = Str::contains($category, 'Home & Gerden');
        $containsPA = Str::contains($category, 'Pet Accessories');

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type_id;

        $containsSa = Str::contains($productType, 1);
        $containsUn = Str::contains($productType, 2);


        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('super_admin.super-amazon-edit-product', compact('id', 'productDetails', 'productLinks', 'productImages','containsT','containsF','containsU','containsUnder18','containsUnder1824','containsUnder2534','containsUnder3444','containsUnder4554','containsUnder5564','containsUnder65','containsMen','containsWomen','containsBaby','containsUnisex','containsSa','containsUn','containsAv','containsUnav','containsHB','containsBK','containsFIT','containsCA','containsHG','containsPA','containsBAC','containsMAC','containsBS','containsOD','containsBH','containsJW','containsKH','containsCUC','containsELE','containsGIM','containsMFA','containsWf','realCategory'));
    }


    public function exploreShopifyProduct()
    {
        $realCategory = Category::whereNotNull('id')->get();

        $trendingProducts = ShopifyProduct::whereNotNull('shopify_link')
                                            ->orderBy('created_at','DESC')
                                            ->paginate(50);

        return view('super_admin.super-admin-store',compact('trendingProducts','realCategory'));
    }

    public function shopifyEdit($id)
    {
        $realCategory = Category::whereNotNull('id')->get();

        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ShopifyProduct::find($id);

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type;

        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('super_admin.super-admin-store-edit', compact('id', 'productDetails','containsAv','containsUnav','productType','realCategory'));
    }
    
    public function quickstart()
    {
        $data = QuickStart::all();
        return view('admin.quickstart-index',compact('data'));
    }

    public function  quickstart_create()
    {
        return view('admin.quickstart-create');
    }

    public function quickstart_store(Request $request)
    {   
        if(isset($request->url)){
            $path = $request->url->store('quickstart/uploads', 'public');
        }

        $add = new QuickStart;
        $add->title = $request->title;
        $add->des = $request->des;
        $add->link = $request->link;
        $add->link_title = $request->link_title;
        $add->url = $path;
        $add->save();

        return redirect()->back()->with('status', 'Quick Start created successfully');
    }

    public function quickstart_edit($id){

        $data = QuickStart::where('id', $id)->first();

        return view('admin.quickstart-create',compact('data'));
    }

    public function quickstart_update(Request $request,$id){

        $old = QuickStart::where('id', $id)->first();

        if(isset($request->url)){
            $path = $request->url->store('quickstart/uploads', 'public');
        }else{
            $path = $old->url;
        }

        $update = QuickStart::where('id', $id)->update([
            'title' => $request->title,
            'des' => $request->des,
            'link' => $request->link,
            'link_title' => $request->link_title,
            'url' => $path

            ]);

        return redirect()->back()->with('status', 'Quick Start updated successfully');
    }

    public function quickstart_delete($id){
        $delete = QuickStart::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'Quick Start Deleted Successfully!');

    }

    public function customer()
    {
        $data = User::where('user_type','user')->latest()->paginate(15);

        return view('admin.subcriber',compact('data'));
    }

    public function customer_edit($id)
    {
        $data = User::where('id',$id)->first();

        return view('admin.profile',compact('data'));
    }

    public function customer_update(Request $request,$id)
    {
        if($request->profile_upload != null){    
            $path = $request->profile_upload->store('public/userimages/profile');
        $path = $request->profile_upload->store('userimages/profile');
            $update = User::where('id',$id)->update([
                'name' => $request->name,
                'address' => $request->address,
                'email' =>$request->email,
                'status' =>$request->status,
                'profile_photo_path' => $path
            ]);
            }else{
                $update = User::where('id',$id)->update([
                'name' => $request->name,
                'address' => $request->address,
                'email' =>$request->email,
                'status' =>$request->status,
            ]);
            }
            return back();
    }

    public function customer_password_update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
			'new_password' => 'required_with:confirm_password|same:confirm_password',
			'confirm_password' => ['required'],
		])->validate();
		$password = Hash::make($request->new_password);
		$update = User::where('id',$id)->update([
			'password' => $password
		]);

		return back();
    }

    public function customer_delete($id){
        $delete = User::where('id', $id)->delete();

        return redirect()->back()->with('errors', 'Subscriber Deleted Successfully!');

    }

    public function SupCategory(Request $request)
    {

        $data = Category::all();

        return view('super_admin.sup-categories',compact('data'));
    }

    public function AddSupCategory(Request $request)
    {
        return view('admin.sup-category-add');
    }
    public function SupCategoryAdd(Request $request)
    {
        $add = new Category;
        $add->category = $request->name;
        $add->save();

        return redirect()->back()->with('status', 'Category created successfully');
    }

    public function SupCategoryEdit($id){

        $data = Category::where('id', $id)->first();

        return view('admin.sup-category-add',compact('data'));
    }

    public function CategoryUpdate(Request $request,$id){

        $update = Category::where('id', $id)->update([
            'category' => $request->name,
        ]);

        return redirect()->back()->with('status', 'Category updated successfully');
    }

    public function SupFreelancerList()
    {
        $freelancers = User::where('user_type',"freelancer")->get();
        // dd($freelancers);
        return view('admin.freelancers-list',compact('freelancers'));
    }

    public function AddNewFreelancer($value='')
    {
        return view('admin.add-new-freelancer');
    }

    public function SupEditAli($id)
    {
        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ProductDetail::find($id);
        
        $productImages = ProductImage::firstWhere('product_detail_id', $id);
         
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        
        $realCategory = Category::whereNotNull('id')->get();

        //  FETCH SELECTED OPPORTUNITY DATA
        $opportunitys = $productDetails->opportunity_level;

        $containsT = Str::contains($opportunitys, 'trending_product');
        $containsF = Str::contains($opportunitys, 'facebook_ads');
        $containsU = Str::contains($opportunitys, 'untapped_product');


        //  FETCH SELECTED GENDER DATA
        $gender = $productDetails->gender;
        
        $containsMen = Str::contains($gender, 'Men');
        $containsWomen = Str::contains($gender, 'Women');
        $containsBaby = Str::contains($gender, 'Baby');
        $containsUnisex = Str::contains($gender, 'Unisex');


        //  FETCH SELECTED AGE DATA
        $customerAge = $productDetails->age;

        $containsUnder18   = Str::contains($customerAge, 'Under 18');
        $containsUnder1824 = Str::contains($customerAge, '18-24');
        $containsUnder2534 = Str::contains($customerAge, '25-34');
        $containsUnder3444 = Str::contains($customerAge, '34-44');
        $containsUnder4554 = Str::contains($customerAge, '45-54');
        $containsUnder5564 = Str::contains($customerAge, '55-64');
        $containsUnder65   = Str::contains($customerAge, '65+');

        //  FETCH SELECTED CATEGORY DATA
        $category = $productDetails->category;

        $containsBAC = Str::contains($category, 'Bike Accessories');
        $containsMAC = Str::contains($category, 'Mobile Accessories');
        $containsBS = Str::contains($category, 'Bag\'s & Shoes');
        $containsOD = Str::contains($category, 'Outdoor');
        $containsBH = Str::contains($category, 'Beauty Hair');

        $containsJW = Str::contains($category, 'Jewellery');
        $containsKH = Str::contains($category, 'Kitchen & household');
        $containsCUC = Str::contains($category, 'Computer Accessories');
        $containsELE = Str::contains($category, 'Electronics');
        $containsGIM = Str::contains($category, 'Garden Improvement');
        $containsMFA = Str::contains($category, 'Man\'s Fashion');

        $containsWf = Str::contains($category, ' Women\'s Fashion');
        $containsHB = Str::contains($category, 'Health & Beauty');
        $containsBK = Str::contains($category, 'Baby & Kids');
        $containsFIT = Str::contains($category, 'Fitness');
        $containsCA = Str::contains($category, 'Car Accessories');
        $containsHG = Str::contains($category, 'Home & Gerden');
        $containsPA = Str::contains($category, 'Pet Accessories');

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type_id;

        $containsSa = Str::contains($productType, 1);
        $containsUn = Str::contains($productType, 2);


        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('super_admin.super-admin-ali-edit', compact('id', 'realCategory', 'productDetails', 'productLinks', 'productImages','containsT','containsF','containsU','containsUnder18','containsUnder1824','containsUnder2534','containsUnder3444','containsUnder4554','containsUnder5564','containsUnder65','containsMen','containsWomen','containsBaby','containsUnisex','containsSa','containsUn','containsAv','containsUnav','containsHB','containsBK','containsFIT','containsCA','containsHG','containsPA','containsBAC','containsMAC','containsBS','containsOD','containsBH','containsJW','containsKH','containsCUC','containsELE','containsGIM','containsMFA','containsWf'));
    }  

    public function SupEditAll($id)
    {
        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ProductDetail::find($id);
        
        $productImages = ProductImage::firstWhere('product_detail_id', $id);
         
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        
        $realCategory = Category::whereNotNull('id')->get();
        // dd($realCategory);

        //  FETCH SELECTED OPPORTUNITY DATA
        $opportunitys = $productDetails->opportunity_level;

        $containsT = Str::contains($opportunitys, 'trending_product');
        $containsF = Str::contains($opportunitys, 'facebook_ads');
        $containsU = Str::contains($opportunitys, 'untapped_product');


        //  FETCH SELECTED GENDER DATA
        $gender = $productDetails->gender;
        
        $containsMen = Str::contains($gender, 'Men');
        $containsWomen = Str::contains($gender, 'Women');
        $containsBaby = Str::contains($gender, 'Baby');
        $containsUnisex = Str::contains($gender, 'Unisex');


        //  FETCH SELECTED AGE DATA
        $customerAge = $productDetails->age;

        $containsUnder18   = Str::contains($customerAge, 'Under 18');
        $containsUnder1824 = Str::contains($customerAge, '18-24');
        $containsUnder2534 = Str::contains($customerAge, '25-34');
        $containsUnder3444 = Str::contains($customerAge, '34-44');
        $containsUnder4554 = Str::contains($customerAge, '45-54');
        $containsUnder5564 = Str::contains($customerAge, '55-64');
        $containsUnder65   = Str::contains($customerAge, '65+');

        //  FETCH SELECTED CATEGORY DATA
        $category = $productDetails->category;

        $containsBAC = Str::contains($category, 'Bike Accessories');
        $containsMAC = Str::contains($category, 'Mobile Accessories');
        $containsBS = Str::contains($category, 'Bag\'s & Shoes');
        $containsOD = Str::contains($category, 'Outdoor');
        $containsBH = Str::contains($category, 'Beauty Hair');

        $containsJW = Str::contains($category, 'Jewellery');
        $containsKH = Str::contains($category, 'Kitchen & household');
        $containsCUC = Str::contains($category, 'Computer Accessories');
        $containsELE = Str::contains($category, 'Electronics');
        $containsGIM = Str::contains($category, 'Garden Improvement');
        $containsMFA = Str::contains($category, 'Man\'s Fashion');

        $containsWf = Str::contains($category, ' Women\'s Fashion');
        $containsHB = Str::contains($category, 'Health & Beauty');
        $containsBK = Str::contains($category, 'Baby & Kids');
        $containsFIT = Str::contains($category, 'Fitness');
        $containsCA = Str::contains($category, 'Car Accessories');
        $containsHG = Str::contains($category, 'Home & Gerden');
        $containsPA = Str::contains($category, 'Pet Accessories');

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type_id;

        $containsSa = Str::contains($productType, 1);
        $containsUn = Str::contains($productType, 2);


        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('super_admin.sup-admin-edit-products', compact('id', 'productDetails', 'productLinks', 'productImages','containsT','containsF','containsU','containsUnder18','containsUnder1824','containsUnder2534','containsUnder3444','containsUnder4554','containsUnder5564','containsUnder65','containsMen','containsWomen','containsBaby','containsUnisex','containsSa','containsUn','containsAv','containsUnav','containsHB','containsBK','containsFIT','containsCA','containsHG','containsPA','containsBAC','containsMAC','containsBS','containsOD','containsBH','containsJW','containsKH','containsCUC','containsELE','containsGIM','containsMFA','containsWf','realCategory'));
    }  
    
    public function AddNewFreelancerForReal(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'password' => 'required_with:confirm_password|same:confirm_password',
			'confirm_password' => ['required'],
		])->validate();

        if($request->profile_upload != null){    
                $path = $request->profile_upload->store('public/userimages/profile');
                $path = $request->profile_upload->store('userimages/profile');

                $add = new User;
                $add->name = $request->name;
                $add->email = $request->email;
                $add->user_type = 'freelancer';
                $add->plan_name = $request->plan_name;
                $add->password = Hash::make($request->password);
                $add->address = $request->address;
                $add->profile_photo_path = $path;
                $add->save();
            }else{
                $add = new User;
                $add->name = $request->name;
                $add->email = $request->email;
                $add->user_type = 'freelancer';
                $add->plan_name = $request->plan_name;
                $add->password = Hash::make($request->password);
                $add->address = $request->address;
                $add->save();
            }

        return redirect()->back()->with('status', 'Freelancer updated successfully');
    }

    public function FreelancerDeactive($id)
    {
        $update = User::where('id',$id)->update([
            'status' => 0
        ]);

        return back();
    }

    public function FreelancerActive($id)
    {
        $update = User::where('id',$id)->update([
            'status' => 1
        ]);

        return back();
    }

    public function subscription(Request $request)
    {
        $data = StripeProduct::all();
        return view('super_admin.subcription-plan-details', compact('data'));
    }

    public function CreateProduct($value='')
    {

        $data = StripeProduct::all();

        return view('super_admin.create-product', compact('data'));
    }

    public function CreateProductForReal(Request $request)
    {
        $add = new StripeProduct;
        $add->product_name = $request->product_name;
        $add->product_code = $request->product_code;
        $add->monthly_pricing = $request->monthly_pricing;
        $add->to_pay_today = $request->to_pay_today;
        $add->original_amount = $request->original_amount;
        $add->discount_amount = $request->discount_amount;
        $add->saved_percentage = $request->saved_percentage;
        $add->billed_for = $request->billed_for;
        $add->coupon_id = $request->coupon_id;
        $add->save();

        return back();
    }

    public function EditProduct($id)
    {
        $data = StripeProduct::where('id',$id)->get();
        // dd($data);

        return view('super_admin.edit-product', compact('data'));
    }

    public function EditProductForReal(Request $request)
    {
        $data = StripeProduct::where('id',$request->id)->get();

        // dd($request->all());
        $productDetails = StripeProduct::find($request->id);
        $productDetails->product_name = $request->product_name;
        $productDetails->product_code = $request->product_code;
        $productDetails->monthly_pricing = $request->monthly_pricing;
        $productDetails->to_pay_today = $request->to_pay_today;
        $productDetails->original_amount = $request->original_amount;
        $productDetails->discount_amount = $request->discount_amount;
        $productDetails->saved_percentage = $request->saved_percentage;
        $productDetails->coupon_id = $request->coupon_id;
        $productDetails->billed_for = $request->billed_for;
        $productDetails->save();

        return back()->with('status', 'Product Updated Successfully!');
    }
}
