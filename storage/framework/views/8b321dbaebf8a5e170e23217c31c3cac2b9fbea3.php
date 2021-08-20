
<?php $__env->startSection('content'); ?>
    <main class="login-from-bg">
        <div class="eb-about-bg"></div>
        <div class="login-from">
            <div class="container">
                <div class="row login-from-main">
                    <div class="col-sm-12 col-md-5">
                        <div class="benefit_block">
                            <img src="<?php echo e(asset('front/images/login.png')); ?>" width="100%">
                            <h3>Benefits to Joining</h3>
                            <ul class="text__block">
                                <li>Access to Unlimited Products</li>
                                <li>Download Fresh Thumbnail & Ads Videos</li>
                            </ul>
                            <ul class="text__block">
                                <li>Access to facebook Audience Research</li>
                                <li>Explore AliExpress, Amazon, and Shopify Store</li>
                                <li>Manage Orders & Subscription</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 login-from-content">
                        <div class="account-login-from">
                            <div class="eb-acc-login-from">
                                <?php if(session('status')): ?>
            <div class="mb-4 font-medium text-sm text-green-600">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <h2>Login to Your <span>Account</span></h2>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['class' => 'form-label','for' => 'email','value' => ''.e(__('Email')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-label','for' => 'email','value' => ''.e(__('Email')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['class' => 'form-control','id' => 'email','type' => 'email','name' => 'email','value' => old('email'),'required' => true,'autofocus' => true]]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','id' => 'email','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'required' => true,'autofocus' => true]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>

            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'password','class' => 'form-label','value' => ''.e(__('Password')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password','class' => 'form-label','value' => ''.e(__('Password')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['id' => 'password','class' => 'form-control','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password','class' => 'form-control','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>

            <div class="block mt-4">
                <div class="row from-check-re_captch">
                    <div class="col-7">
                        <div class="form-check">
                            <input class="form-check-input robot-input" type="checkbox" value="" id="Check-reCaptcha">
                            <label class="form-check-label" for="Check-reCaptcha">
                                I'm not a robot
                            </label>
                        </div>
                    </div>
                    <div class="col-5 text-center re-captcha-content">
                        <img src="<?php echo e(asset('front/images/logo_48.png')); ?>" width="30" height="30">
                        <p class="re-captcha-text">reCAPTCHA</p>
                        <p class="re-captcha-policy"><a href="">Privacy</a>-<a href="">Terms</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Check-reCaptcha" name="remember">
                            <label class="form-check-label" for="Check-reCaptcha">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-6 lost-password">
                        <?php if(Route::has('password.request')): ?>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot your password?')); ?>

                            </a>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 from-log_in-btn">
                        
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'btn login-btn']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'btn login-btn']); ?>
                        <?php echo e(__('Log in')); ?>

                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                    </div>
                    <div class="col-12">
                        <div class="new-user-sign_up">
                            <p>New user to eButify? <a href="/register">Sign Up Now</a></p>
                        </div>
                    </div>
                </div>
            </div>

            
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/auth/login.blade.php ENDPATH**/ ?>