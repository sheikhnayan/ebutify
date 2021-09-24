@extends('front.layout.main')
@section('content')
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Author: {{ $user->name }}</h3>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="Latest-post-section">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-8">
                        <div class="row">
                            <div class="col-12 blog-post-single">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    @foreach ($data as $item)
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="...">
                                            <div class="card-body eb-latest-card-body">
                                                <h5 class="card-title latest-blog-card-title"><a href="/blog/{{str_replace(' ', '-', $item->heading)}}">{{ $item->heading }}</a></h5>
                                                <div class="latest-card-footer">
                                                    <div class="blog-posted-by">
                                                        <span class="author">
                                                            <a href="#">
                                                                {{-- <img src="{{asset('images/reza.jpg')}}" height="36" width="36"> --}}
                                                                <span class="author-name"> <a href="/author/{{ str_replace(' ','-', $item->name) }}">{{ $item->name }}</a></span>
                                                                <span class="post-date"> {{ date('F j,Y', strtotime($item->created_at)) }}</span>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-12 d-flex justify-content-center">
                                        {!! $data->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                {{-- <div class="input-group mb-3 author_search_bar">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-text" id=""><i class="fas fa-search"></i></span>
                                </div> --}}
                                <div class="most-popular-card-head">
                                    <h2>Popular Post</h2>
                                    <div class="popular-sidebar-post">
                                        @foreach ($popular as $item)
                                        <div class="sidebar-single-post">
                                            <a href="/blog/{{str_replace(' ', '-', $item->heading)}}"><img src="{{ asset('storage/'.$item->image) }}"></a>
                                            <div class="popular-post-content">
                                                <a href="/blog/{{str_replace(' ', '-', $item->heading)}}">{{ $item->heading }}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="author_categories_list">
                                    <h2>Categories</h2>
                                    <ul>
                                        @foreach ($category as $item)
                                        <li class="author_cat_item"><a href="/category/{{str_replace(' ', '-', $item->category_name)}}"><i class="fas fa-chevron-right"></i>{{ $item->category_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    @endsection