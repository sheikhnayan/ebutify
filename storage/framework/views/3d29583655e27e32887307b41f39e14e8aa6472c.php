
<?php $__env->startSection('content'); ?>
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="faq-text text-center">
                        <h3>Frequently Asked Questions</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 faq-main-contant mb-5 pb-5">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionExample">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo e($item->id); ?>">
                                        <button class="accordion-button eb-faq-acc-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($item->id); ?>"
                                            aria-expanded="false" aria-controls="collapse<?php echo e($item->id); ?>">
                                            <?php echo e($loop->iteration); ?>. <?php echo e($item->faq_question); ?>

                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo e($item->id); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo e($item->id); ?>"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body faq-acc-body">
                                            <P><?php echo e($item->faq_answer); ?></P>
                                        </div>
                                    </div>
                                </div>   
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/front/faq.blade.php ENDPATH**/ ?>