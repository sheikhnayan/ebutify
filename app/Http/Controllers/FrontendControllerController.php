<?php

namespace App\Http\Controllers;

use App\Models\FrontendController;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Homepage;
use App\Models\Review;
use App\Models\BlogCategory;
use App\Mail\ContactMail;
use Mail;

class FrontendControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $data = Blog::join('users','users.id','=','blogs.created_by')
        ->join('blog_categories','blog_categories.id','blogs.category_id')
        ->select('blogs.*','users.name','blog_categories.category_name')
        ->latest()
        ->paginate(12);
        $popular = Blog::where('popular', 'false')->latest()->get();
        $featured = Blog::where('featured', 'false')->latest()->first();
        return view('front.blog',compact('data','popular','featured'));
    }


    public function index()
    {
        $data = Blog::join('users','users.id','=','blogs.created_by')
        ->select('blogs.*','users.name')
        ->latest()
        ->limit(3)
        ->get();

        $image = Homepage::all();

        $review = Review::latest()->get();

        $popular = Blog::where('popular', 'false')->latest()->get();
        $featured = Blog::where('featured', 'false')->latest()->first();
        return view('front.index',compact('data','popular','featured','image','review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrontendController  $frontendController
     * @return \Illuminate\Http\Response
     */
    public function single_blog($id)
    {
        $name = str_replace('-', ' ', $id);

        $data = Blog::where('heading', $name)
        ->join('blog_categories','blog_categories.id','blogs.category_id')
        ->select('blogs.*','blog_categories.category_name')
        ->first();
        $fix = str_replace(' ','',$data->tags);
        $tags = explode(',',$fix);
        $author = User::where('id', $data->created_by)->first();

        return view('front.blog2',compact('data','author','tags'));
    }


    public function category($id)
    {
        $fix = str_replace('-',' ',$id);

        $cat = BlogCategory::where('category_name',$fix)->first();
        
        $data = Blog::where('category_id', $cat->id)
            ->join('users','users.id','blogs.created_by')
            ->select('blogs.*','users.name')
            ->paginate(12);

        $popular = Blog::where('category_id', $cat->id)->where('popular', 'false')->get();

        $category = BlogCategory::all();

        return view('front.category',compact('data','popular','category','cat'));
    }

    public function author($id)
    {
        $fix = str_replace('-',' ',$id);

        $user = user::where('name',$fix)->first();
        
        $data = Blog::where('created_by', $user->id)
            ->join('users','users.id','blogs.created_by')
            ->select('blogs.*','users.name')
            ->paginate(12);

        $popular = Blog::where('created_by', $user->id)->where('popular', 'false')->get();

        $category = BlogCategory::all();

        return view('front.author',compact('data','popular','category','user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrontendController  $frontendController
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $details = [
            'subject' => 'Customer Query',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->msg
        ];
        
        Mail::to('nman0171@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent','Your message has been sent successfully!');
    }

}
