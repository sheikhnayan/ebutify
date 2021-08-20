<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Homepage;
use App\Models\FAQ;
use App\Models\Review;
use App\Models\TermsAndCondition;
use App\Models\PrivacyAndPolicy;
use App\Models\RefundPolicy;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;
use Auth;

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
            'image' => $request->image,
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

    public function category_update(Request $request,$id){

        $update = BlogCategory::where('id', $id)->update([
            'category_name' => $request->name,
        ]);

        return redirect()->back()->with('status', 'Blog Category updated successfully');
    }
}
