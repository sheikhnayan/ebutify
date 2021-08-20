<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>eButify User</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <link
      rel="stylesheet"
      href="<?php echo e(asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>"
    />
    <link
      rel="stylesheet"
      href="<?php echo e(asset('vendors/font-awesome/css/font-awesome.min.css')); ?>"
    />
    <link rel="stylesheet" href="<?php echo e(asset('vendors/themify-icons/css/themify-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vendors/flag-icon-css/css/flag-icon.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vendors/selectFX/css/cs-skin-elastic.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vendors/jqvmap/dist/jqvmap.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
      rel="stylesheet"
      type="text/css"
    />


       <?php echo $__env->yieldContent('head'); ?>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/freelancer-dashboard')); ?>">
                    eButify User Payment
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <a type="button" href="<?php echo e(route('logout')); ?>" class="btn btn-outline-dark">Log out</a>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <?php echo $__env->yieldContent('js'); ?>


</body>
</html><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/layouts/payment.blade.php ENDPATH**/ ?>