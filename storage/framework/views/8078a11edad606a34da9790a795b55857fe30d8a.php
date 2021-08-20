
<?php $__env->startSection('content'); ?>
    <main>
        <section class="eb-blog-page-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="eb-about-bg"></div>
                        <div class="blog_2_img text-center">
                            <img src="<?php echo e(asset('storage/'.$data->image)); ?>" width="100%">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div id="main-content-entry" class="blog_2-main-contant pb-5">
                            <div class="entry_profile">
                                <span class="article_author_link">
                                    <i class="fas fa-user-circle"></i>
                                    <a href="/author">
                                        <span> <a href="/author/<?php echo e(str_replace(' ','-', $author->name)); ?>"><?php echo e($author->name); ?></a></span>
                                    </a>
                                    <span class="divider">|</span>
                                    <time>Update: <?php echo e(date('F j,Y', strtotime($data->updated_at))); ?></time>
                                </span>
                            </div>
                            <h1><?php echo e($data->heading); ?></h1>
                            <?php echo $data->body; ?>

                        </div>
                        <div class="blog_social_media">
                            <h3>Share this</h3>
                            <ul>
                                
                                <li><a href="#" 
                                    onclick="
                                      window.open(
                                        'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                                        'facebook-share-dialog', 
                                        'width=626,height=436'); 
                                      return false;"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a></li>
                                
                                <li><a class="share-linkedin" href="#" onclick="
                                    window.open('http://www.linkedin.com/shareArticle?mini=true&url=https://127.0.0.1/<?php echo e(Request::path()); ?>&summary=some%20summary%20if%20you%20want&source=stackoverflow.com');
                                    return false;"><i class="fab fa-linkedin-in" style="color: #0e76a8;"></i></a></li>
                                
                            </ul>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog_2_posted_in">
                                    <h3>Posted in:</h3>
                                    <span><a href="/category/<?php echo e(str_replace(' ', '-', $data->category_name)); ?>"><?php echo e($data->category_name); ?></a></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog_2_posted_in">
                                    <h3>Tagged:</h3>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span style="display: block; color:#3c5ef0"><a><?php echo e($item); ?></a></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        
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
                    
                    <li><a href="#" onclick="
                        window.open('http://www.linkedin.com/shareArticle?mini=true&url=https://127.0.0.1/<?php echo e(Request::path()); ?>&summary=some%20summary%20if%20you%20want&source=stackoverflow.com');
                        return false;"><i class="fab fa-linkedin-in" style="color: #0e76a8;"></i></a></li>
                    
                    
                </ul>
            </div>
        </section>
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/front/blog2.blade.php ENDPATH**/ ?>