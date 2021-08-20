    @extends('front.layout.main')
    @section('content')

    <main>
        <div class="eb-front-page-hero">
            <div class="eb-front-page-hero-wrap">
                <div class="container">
                    <div class="row eb-front-page-head">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="eb-font-page-content">
                                <h1>Welcome to #1 Products spy tool for making tons of money.</h1>
                                <p>
                                    We are manually adding winning products on a daily basis. Stop wasting money on bad products. eButify is a curation of the best new products, every day. Wanna be a successful store owner? Subscribe now and get access to our full winning products list with a kickass detailed analytics.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="eb-font-page-image">
                                <img src="{{ asset('front/images/hero-image.png') }}" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="eb-font-page-btn">
                                <a class="get-start-btn" href="/register"><i class="fas fa-arrow-right"></i>Get Started</a>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="row trusted-add shadow">
                                <div class="col-2 trusted-add-image">
                                    <img src="{{ asset('front/images/Asset-5-1.svg') }}" style="max-width: 50%;">
                                </div>
                                <div class="col-10 trusted-add-text">
                                    <p>Trusted by <span class="trusted-add-text-mark">500+ Businesses</span>
                                        in 40+ Countries over the world</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="eb-main-service-card">
            <div class="container">
                <div class="row eb-service-card row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="elementor-ebutyfy-center px-5">
                                <img width="170" height="170" src="{{ asset('front/images/card-1.png') }}" class="card-img-top" alt="..." max-width="170" max-height="170">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Access Data</h3>
                                <p class="card-text">After getting started you will have full access to our tools. There are no limitations on our services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card eb-service-m-card h-100">
                            <div class="elementor-ebutyfy-center px-5">
                                <img width="200" height="150" src="{{ asset('front/images/grow.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title eb-smc-title">Grow Your Business</h3>
                                <p class="card-text eb-smc-text">You can see thousands of products in our tools just apply your criteria in our awesome filter system and find the best match in one click and see the details, we provide everything you need in every product. So, pick the best and grow your business.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="elementor-ebutyfy-center px-5">
                                <img width="173" height="173" src="{{ asset('front/images/support.png') }}" class="card-img-top" alt="..." max-width="170" max-height="170">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Our Support Team</h3>
                                <p class="card-text">We provide 24/7 support to our customers via live chat and phone calls. We solve your problem with billing, membership, and our mastermind 7 figure product research tool. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="left-large-section section-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 left-large-content mt-3">
                            <img src="{{ asset('storage/'.$image[0]->image) }}" alt="" class="left-large-section-img shadow">
                            <span class="left-large-section-icon-one animation-wave_one">
                                <i class="fas fa-users"></i>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-5 left-large-section-r">
                            <div class="eb-large-text-center">
                                <h3>Spy products with our product research tool</h3>
                                <p>A platform for dropshippers who want to research products to sell their online stores. Here you can find new and old winning products in our different spy tools. It will save time and money to hire a freelancer to find products on Facebook or many others spy tools. Let check what we'll give you:</p>
                            </div>
                            <div class="row pt-5">
                                <div class="col-12">
                                    <div class="accordion" id="accordionOne">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h11">
                                                <button class="accordion-button eb-accordion-btn" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c11" aria-expanded="true"
                                                    aria-controls="c11">
                                                    <i class="eb-database fas fa-database"></i>Facebook Ads Research
                                                </button>
                                            </h2>
                                            <div id="c11" class="accordion-collapse eb-ac-content collapse show"
                                                aria-labelledby="h11" data-bs-parent="#accordionOne">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>Our product researcher specialist finds the ads on facebook daily and added them manually. We're adding that product by following Facebook ads terms and conditions. The ads have all data which you need to run ads on social media.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h12">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c12" aria-expanded="false"
                                                    aria-controls="c12">
                                                    <i class="eb-ac-list fas fa-list-ul"></i>Untapped Product Research
                                                </button>
                                            </h2>
                                            <div id="c12" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h12" data-bs-parent="#accordionOne">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>We are manually adding untapped products on a daily basis that were picked by our top-rated product research freelancers. To check product saturation we are using jungle scout, Helium 10, google trends, AliExpress sales history (Asify), Google searches (analyses of Google Shopping ads), Google keyword planner, etc. No need to waste money to find untapped products on different tools, here you can find the best you need and start selling them immediately in your store.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h13">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c13" aria-expanded="false"
                                                    aria-controls="c13">
                                                    <i class="eb-ac-bar fas fa-bars"></i>Winning Product Research
                                                </button>
                                            </h2>
                                            <div id="c13" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h13" data-bs-parent="#accordionOne">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <P>Our top-rated product researcher specialists are finding winning or viral products in different sources like adSpy, Dropispy, Droppoint, adPlexity, and eComhunt. After that check their saturation via their personal way. After confirming that the product is viral then they add them to our server. You just check and start selling them immediately in your store.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="right-large-section section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5 right-large-section-r eb_main_content_section_2">
                            <div class="eb-large-text-center">
                                <h3>Facebook Ads Research</h3>
                                <p style="color: blueviolet;">Thousands of winning ads – No Limit on Anything!</p>
                                <p>Here you will get Facebook winning ads, downloadable video ads, Ads copy, best quality thumbnail, AliExpress best supplier, eBay and amazon product links, Bestseller competitors, handwriting product descriptions, Gif images, and so on.</p>
                            </div>
                            <div class="row pt-5">
                                <div class="col-12">
                                    <div class="accordion" id="accordionTwo">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h21">
                                                <button class="accordion-button eb-accordion-btn" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c21" aria-expanded="true"
                                                    aria-controls="c21">
                                                    <i class="eb-database fas fa-database"></i>Facebook Ads Data
                                                </button>
                                            </h2>
                                            <div id="c21" class="accordion-collapse eb-ac-content collapse show"
                                                aria-labelledby="h21" data-bs-parent="#accordionTwo">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>Here you can see facebook original ads link to view ads engagement. We provide Facebook or other social media ads content, targeted audience ( age, sex, and advertising area ), Fresh video ads without promotional text and logos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h22">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c22" aria-expanded="false"
                                                    aria-controls="c22">
                                                    <i class="eb-ac-list fas fa-list-ul"></i>Product Details
                                                </button>
                                            </h2>
                                            <div id="c22" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h22" data-bs-parent="#accordionTwo">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>We provide massive data with the ads like product price, profit, total order, Monthly value, Competitor ( 5 best seller store links ), product video reviews, best AliExpress suppliers, eBay and amazon link, Google trends, keyword values, Copywriting and many more.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h23">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c23" aria-expanded="false"
                                                    aria-controls="c23">
                                                    <i class="eb-ac-bar fas fa-bars"></i>Product Description
                                                </button>
                                            </h2>
                                            <div id="c23" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h23" data-bs-parent="#accordionTwo">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <P>We provide hand-made descriptions that will engage either your customer imagination or emotions and convert them to a real customer. We are using a format to write a product description that looks nice and increases your product conversion rate. Also, we provide gif images that you can add to your description.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-3 eb_main_img_section_2">
                            <div class="row ">
                                <div class="col-12 right-large-section-image pl-5">
                                    <img src="{{ asset('storage/'.$image[1]->image) }}" alt="" class="right-large-section-img shadow">
                                    <span class="right-large-section-icon-two animation-wave_two">
                                        <i class="fas fa-handshake"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="left-large-section section-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 mt-3">
                            <img src="{{ asset('storage/'.$image[2]->image) }}" alt="" class="left-large-section-img shadow">
                            <span class="left-large-section-icon-three animation-wave_three">
                                <i class="fas fa-mobile-alt"></i>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-5 left-large-section-r">
                            <div class="eb-large-text-center">
                                <h3>Untapped Product Research</h3>
                                <p style="color: blueviolet;">Thousands of Untapped Products – No Limit on Anything!</p>
                                <p>Here you will get Facebook winning ads, downloadable video ads, Ads copy, best quality thumbnail, AliExpress best supplier, eBay and amazon product links, Bestseller competitors, handwriting product descriptions, Gif images, and so on.</p>
                            </div>
                            
                            <div class="row pt-5">
                                <div class="col-12">
                                    <div class="accordion" id="accordionThree">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h31">
                                                <button class="accordion-button eb-accordion-btn" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c31" aria-expanded="true"
                                                    aria-controls="c31">
                                                    <i class="eb-database fas fa-database"></i>Facebook Ads Data
                                                </button>
                                            </h2>
                                            <div id="c31" class="accordion-collapse eb-ac-content collapse show"
                                                aria-labelledby="h31" data-bs-parent="#accordionThree">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>Here you can see facebook original ads link to view ads engagement. We provide Facebook or other social media ads content, targeted audience ( age, sex, and advertising area ), Fresh video ads without promotional text and logos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h32">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c32" aria-expanded="false"
                                                    aria-controls="c32">
                                                    <i class="eb-ac-list fas fa-list-ul"></i>Product Details
                                                </button>
                                            </h2>
                                            <div id="c32" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h32" data-bs-parent="#accordionThree">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>We provide massive data with the ads like product price, profit, total order, Monthly value, Competitor ( 5 best seller store links ), product video reviews, best AliExpress suppliers, eBay and amazon link, Google trends, keyword values, Copywriting and many more.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h33">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c33" aria-expanded="false"
                                                    aria-controls="c33">
                                                    <i class="eb-ac-bar fas fa-bars"></i>Product Description
                                                </button>
                                            </h2>
                                            <div id="c33" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h33" data-bs-parent="#accordionThree">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <P>We provide hand-made descriptions that will engage either your customer imagination or emotions and convert them to a real customer. We are using a format to write a product description that looks nice and increases your product conversion rate. Also, we provide gif images that you can add to your description.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="right-large-section section-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5 right-large-section-r eb_main_content_section_4">
                            <div class="eb-large-text-center">
                                <h3>Trending Product Research</h3>
                                <p style="color: blueviolet;">Thousands of Trending Products – No Limit on Anything!</p>
                                <p>Here you will get Facebook winning ads, downloadable video ads, Ads copy, best quality thumbnail, AliExpress best supplier, eBay and amazon product links, Bestseller competitors, handwriting product descriptions, Gif images, and so on.</p>
                            </div>
                            
                            <div class="row pt-5">
                                <div class="col-12">
                                    <div class="accordion" id="accordionFour">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h41">
                                                <button class="accordion-button eb-accordion-btn" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c41" aria-expanded="true"
                                                    aria-controls="c41">
                                                    <i class="eb-database fas fa-database"></i>Facebook Ads Data
                                                </button>
                                            </h2>
                                            <div id="c41" class="accordion-collapse eb-ac-content collapse show"
                                                aria-labelledby="h41" data-bs-parent="#accordionFour">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>Here you can see facebook original ads link to view ads engagement. We provide Facebook or other social media ads content, targeted audience ( age, sex, and advertising area ), Fresh video ads without promotional text and logos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h42">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c42" aria-expanded="false"
                                                    aria-controls="c42">
                                                    <i class="eb-ac-list fas fa-list-ul"></i>Product Details
                                                </button>
                                            </h2>
                                            <div id="c42" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h42" data-bs-parent="#accordionFour">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <p>We provide massive data with the ads like product price, profit, total order, Monthly value, Competitor ( 5 best seller store links ), product video reviews, best AliExpress suppliers, eBay and amazon link, Google trends, keyword values, Copywriting and many more.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h43">
                                                <button class="accordion-button eb-accordion-btn collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#c43" aria-expanded="false"
                                                    aria-controls="c43">
                                                    <i class="eb-ac-bar fas fa-bars"></i>Product Description
                                                </button>
                                            </h2>
                                            <div id="c43" class="accordion-collapse eb-ac-content collapse"
                                                aria-labelledby="h43" data-bs-parent="#accordionFour">
                                                <div class="accordion-body eb-ac-content-body">
                                                    <P>We provide hand-made descriptions that will engage either your customer imagination or emotions and convert them to a real customer. We are using a format to write a product description that looks nice and increases your product conversion rate. Also, we provide gif images that you can add to your description.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-7 mt-3 eb_main_img_section_4">
                            <div class="row">
                                <div class="col-12 right-large-section-image pl-5">
                                    <img src="{{ asset('storage/'.$image[3]->image) }}" alt="" class="right-large-section-img shadow">
                                    <span class="right-large-section-icon-four animation-wave_four">
                                        <i class="fab fa-accusoft"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="slider-main-content">
                <div class="container">
                    <div class="row pt-5 pb-5">
                        <div class="col-12 text-center pt-5 pb-5">
                            <h3>Reviews by our clients</h3>
                        </div>
                        <div class="col-12">
                            <div class="slick-slider">
                                @foreach ($review as $item)
                                <div class="col-sm-12 col-md-6 compliment-slider">
                                    <div class="slider-content mt-5">
                                        @if ($item->image == 'front/images/avatar.jpg')
                                            <img class="slider-content-img" src="{{ asset($item->image) }}">
                                        @else
                                        <img class="slider-content-img" src="{{ asset('storage/'.$item->image) }}">
                                        @endif
                                        <h1 class="slider-profile-name">{{ $item->name }}</h1>
                                        <P class="slider-profile-post">{{ $item->designation }}</P>
                                        <p class="slider-profile-compliment">{{ $item->review }}</p>
                                        <span class="slider-blockquicket"><img src="{{ asset('front/images/blockquicket-icon.png') }}"></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section class="eb-home-b-service-card">
            <div class="container">
                <div class="row eb-b-service-card row-cols-1 row-cols-md-3 g-4">
                    <div class="col-12 eb-b-card-head-main">
                        <div class="eb-b-card-head">
                            <h3>Useful Resources</h3>
                            <p>Get tips & tricks, tutorials, docs and more!<br>
                                Don’t just get happy customers. Learn how to create a loyal fan base with your hospitality.</p>
                        </div>
                    </div>
                    @foreach ($data as $item)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <a href="/single-blog/{{ $item->id }}"><img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="/single-blog/{{ $item->id }}"><h3 class="card-title">{{ $item->heading }}</h3></a>
                                <div class="post-author pt-4">
                                    <span class="post-author-content"><a href="#"></a>
                                        <span class="post-author-name">{{ $item->name }}</span>
                                        <span class="post-author-time" style="left: 0px;">{{ date('F j,Y', strtotime($item->created_at)) }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="eb-card-see-more-btn">
                        <a type="button" class="btn ebc-more-btn" href="/blog">See More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
 