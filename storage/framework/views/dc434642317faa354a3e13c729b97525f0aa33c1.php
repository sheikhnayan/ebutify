
<?php $__env->startSection('content'); ?>
    <main>
        <div class="eb-about-bg"></div>
        <section class="blog-subcribtion-from">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="blog-subscription">
                            <h2>Blog</h2>
                            <p>Join 150,000+ Subcribers</p>
                            <div>
                                <from class="eb-bs-from">
                                    <label for="subscribe_email" class="sr-only">Email Address</label>
                                    <input type="email" placeholder="Email Address" id="subscribe_email" required="required" class="blog-subscription-email-from">
                                    <button type="submit" class="btn blog-subscription-btn">Subcribe Now</button>
                                </from>
                            </div>
                            <span>Get access to exclusive guides, tips, updates, ebooks and more</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-sub-nav mb-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="nav-link active" aria-current="page" href="#">All</a>
                                <div class="collapse navbar-collapse sub-nav" id="navbarSupportedContent">
                                    <div class="d-flex">
                                        <div class="blog-sub-navigation__search blog__search">
                                            <div  class="search_container">
                                                <form  role="search" class="search ">
                                                    <input  type="search" placeholder="Search...">
                                                    <div  class="go_btn ">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </form> 
                                                <div class="search_btn search_open">
                                                    <i class="fas fa-search search-icon"></i>
                                                    <i class="fas fa-times cross-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="eb-blog-featur">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="featured-post">
                            <figure class="featured-thumbnail">
                            <a href="/blog/<?php echo e(str_replace(' ', '-', $featured->heading)); ?>">
                            <img src="<?php echo e(asset('storage/'.$featured->image)); ?>"></a>
                            <span class="thumbnail_badge">Featured</span>
                            </figure>
                            <article class="featured-article">
                                
                                <div class="featured__article-header">
                                    <h2 class="featured__article-title">
                                        <a href="/blog/<?php echo e(str_replace(' ', '-', $featured->heading)); ?>" class="article-title-link"><?php echo e($featured->heading); ?></a>
                                    </h2>
                                </div>
                                <div class="featured__article-content">
                                    <div class="font__size-16" style="color: rgb(79, 91, 109); margin-bottom:30px;">
                                        <p> <?php echo strlen($featured->body) > 50 ? substr($featured->body,0,50).'..' : $featured->body; ?></p>
                                    </div>
                                    <a href="/blog/<?php echo e(str_replace(' ', '-', $featured->heading)); ?>">Continue Reading <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Latest-post-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="blog-post-card-head">
                                    <h2>Latest <span>Blog</span></h2>
                                    
                                </div>
                            </div>
                            <div class="col-12 blog-post-single">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="card-img-top" alt="...">
                                                <div class="card-body eb-latest-card-body">
                                                    <h5 class="card-title latest-blog-card-title"><a href="/blog/<?php echo e(str_replace(' ', '-', $item->heading)); ?>"><?php echo e($item->heading); ?>

                                                    </a></h5>
                                                    <div class="latest-card-footer">
                                                        <div class="blog-posted-by">
                                                            <span class="author">
                                                                <a href="/author">
                                                                    
                                                                    <span class="author-name"> <a href="/author/<?php echo e(str_replace(' ','-', $item->name)); ?>"><?php echo e($item->name); ?></a></span>
                                                                    <span class="post-date"> <?php echo e(date('F j,Y', strtotime($item->created_at))); ?></span>
                                                                </a>
                                                            </span>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <div class="col-md-12 d-flex justify-content-center">
                                        <?php echo $data->links(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="most-popular-card-head text-center">
                                    <h2>Most <span>Popular</span></h2>
                                    <div class="popular-sidebar-post">
                                        <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="sidebar-single-post">
                                            <a href="/blog/<?php echo e(str_replace(' ', '-', $item->heading)); ?>"><img src="<?php echo e(asset('storage/'.$item->image)); ?>"></a>
                                            <div class="popular-post-content">
                                                <a href="/blog/<?php echo e(str_replace(' ', '-', $item->heading)); ?>"><?php echo e($item->heading); ?></a>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
       
    </main>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/front/blog.blade.php ENDPATH**/ ?>