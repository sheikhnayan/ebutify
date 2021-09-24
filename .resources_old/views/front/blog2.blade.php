@extends('front.layout.main')
@section('content')
    <main>
        <section class="eb-blog-page-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="eb-about-bg"></div>
                        <div class="blog_2_img text-center">
                            <img src="{{ asset('storage/'.$data->image) }}" width="100%">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div id="main-content-entry" class="blog_2-main-contant pb-5">
                            <div class="entry_profile">
                                <span class="article_author_link">
                                    <i class="fas fa-user-circle"></i>
                                    <a href="/author">
                                        <span> <a href="/author/{{ str_replace(' ','-', $author->name) }}">{{ $author->name }}</a></span>
                                    </a>
                                    <span class="divider">|</span>
                                    <time>Update: {{ date('F j,Y', strtotime($data->updated_at)) }}</time>
                                </span>
                            </div>
                            <h1>{{ $data->heading }}</h1>
                            {!! $data->body !!}
                        </div>
                        <div class="blog_social_media">
                            <h3>Share this</h3>
                            <ul>
                                {{-- <li><a href=""><i class="fab fa-twitter" style="color: #05acee;"></i></a></li> --}}
                                <li><a href="#" 
                                    onclick="
                                      window.open(
                                        'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                                        'facebook-share-dialog', 
                                        'width=626,height=436'); 
                                      return false;"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a></li>
                                {{-- <li><a href=""><i class="fab fa-reddit-alien" style="color: #ff5700;"></i></a></li> --}}
                                <li><a class="share-linkedin" href="#" onclick="
                                    window.open('http://www.linkedin.com/shareArticle?mini=true&url=https://127.0.0.1/{{ Request::path() }}&summary=some%20summary%20if%20you%20want&source=stackoverflow.com');
                                    return false;"><i class="fab fa-linkedin-in" style="color: #0e76a8;"></i></a></li>
                                {{-- <li><a href=""><i class="fab fa-get-pocket" style="color: #808080;"></i></a></li>
                                <li><a href=""><i class="fas fa-envelope-open-text" style="color: #808080;"></i></a></li>
                                <li><a href=""><i class="fas fa-print" style="color: #00ff00;"></i></a></li> --}}
                            </ul>
                        </div>
                        {{-- <div class="blog_2_card_section">
                            <div class="blog_2_like_btn">
                                <h6>Like this</h6>
                                <button class="btn like_btn"><i class="fas fa-star"></i>Like</button>
                                <p>Be the first to like this</p>
                            </div>
                            <div class="blog_2_card">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card h-100 card_hover shadow">
                                            <img src="images/WordPress-Birthday-2021-1536x839.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title latest-blog-card-title">
                                                    <a href=""> Best Accounting Software for Small Business</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100 card_hover shadow">
                                            <img src="images/WordPress-Birthday-2021-1536x839.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title latest-blog-card-title">
                                                    <a href="">Why Accounting Software Is So Important in Your Business</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100 card_hover shadow">
                                            <img src="images/WordPress-Birthday-2021-1536x839.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title latest-blog-card-title">
                                                    <a href=""> Characteristics of Good Small Business Accounting Tools</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog_2_posted_in">
                                    <h3>Posted in:</h3>
                                    <span><a href="/category/{{str_replace(' ', '-', $data->category_name)}}">{{ $data->category_name }}</a></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog_2_posted_in">
                                    <h3>Tagged:</h3>
                                    @foreach ($tags as $item)
                                    <span style="display: block; color:#3c5ef0"><a>{{ $item }}</a></span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="about_bloger">
                                    <div class="about_bloger_img">
                                        <img src="images/reza.jpg" class="rounded-circle shadow" width="50">
                                    </div>
                                    <div class="about_bloger_text">
                                        <h3>About <span>Rezaul Islam</span></h3>
                                        <p>Rezaul is a tech blogger who loves to help people by sharing useful information. Apart from that, he likes to travel and
                                        read books of all genres in his leisure time.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div col-12>
                                <div class="blog_2_subscribe_from">
                                    <div class="blog_2_subscribe_from_content text-center">
                                        <h3>Subscribe to our Newsletter</h3>
                                        <p>Don’t miss any updates of our new templates and extensions and all the astonishing offers we bring for you.</p>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Email Address" aria-label="email"
                                                aria-describedby="basic-addon2">
                                            <span class="btn blog_subscribe_btn" id="basic-addon2">Subscribe</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="blog_2_reply-textaria">
                                    <h1>Leave a Reply</h1>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Leave a comment here" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="aside_social_media">
            <div class="sticky_social_media_ribon">
                <span class="cols-item">Please<br>Share</span>
                <ul>
                    
                    <li><a href="#" onclick="
                        window.open(
                          'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                          'facebook-share-dialog', 
                          'width=626,height=436'); 
                        return false;"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a></li>
                    {{-- <li><a href="" target="blank"><i class="fab fa-twitter" style="color: #05acee;"></i></a></li> --}}
                    <li><a href="#" onclick="
                        window.open('http://www.linkedin.com/shareArticle?mini=true&url=https://127.0.0.1/{{ Request::path() }}&summary=some%20summary%20if%20you%20want&source=stackoverflow.com');
                        return false;"><i class="fab fa-linkedin-in" style="color: #0e76a8;"></i></a></li>
                    {{-- <li><a href="" target="blank"><i class="fab fa-whatsapp" style="color: #25d366;"></i></a></li> --}}
                    {{-- <li><a href="" target="blank"><i class="fab fa-get-pocket" style="color: #ee4056;"></i></a></li>
                    <li><a href=""><i class="fab fa-reddit-alien" style="color: #ff5700;"></i></a></li>
                    <li><a href="" target="blank"><img src="images/instapaper.svg"></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fas fa-paper-plane" style="color: #08c;"></i></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fab fa-skype" style="color: #00aff0;"></i></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fab fa-pinterest-p" style="color: #c8232c;"></i></a></li>
                    <li class="exp-item"><a href="" target="blank"><i class="fas fa-envelope" style="color: #08c;"></i></a></li>
                    <li class="exp-item do-collops"><a href="javascript::void()" ><i class="fas fa-arrow-up" style="color: #0d4fe9;"></i></a></li>
                    <li class="cols-item do-expnds"><a href="javascript::void()" ><i class="fas fa-arrow-down" style="color: #0d4fe9;"></i></a></li> --}}
                </ul>
            </div>
        </section>
    </main>
    @endsection