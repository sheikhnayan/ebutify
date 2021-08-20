
<?php $__env->startSection('content'); ?>
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Author: <?php echo e($user->name); ?></h3>
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
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="card-img-top" alt="...">
                                            <div class="card-body eb-latest-card-body">
                                                <h5 class="card-title latest-blog-card-title"><a href="/blog/<?php echo e(str_replace(' ', '-', $item->heading)); ?>"><?php echo e($item->heading); ?></a></h5>
                                                <div class="latest-card-footer">
                                                    <div class="blog-posted-by">
                                                        <span class="author">
                                                            <a href="#">
                                                                
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
                    <div class="col-sm-12 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                
                                <div class="most-popular-card-head">
                                    <h2>Popular Post</h2>
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
                                <div class="author_categories_list">
                                    <h2>Categories</h2>
                                    <ul>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="author_cat_item"><a href="/category/<?php echo e(str_replace(' ', '-', $item->category_name)); ?>"><i class="fas fa-chevron-right"></i><?php echo e($item->category_name); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/front/author.blade.php ENDPATH**/ ?>