<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="<?php echo e(asset('css/utilities.css')); ?>">
    <?php echo e($style); ?>



    <link rel="shortcut icon" href="<?php echo e(asset('img/tek2.png')); ?>" />
    <title>Teknik Shop</title>

    <script src="<?php echo e(asset('js/utilities.js')); ?>" defer></script>
    <?php echo e($js ?? ''); ?>

</head>

<body class="m-0">

    <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo e($slot); ?>

    
    <footer>
        <div class="footer-links _container flex_align">
            <?php echo $__env->renderEach('components.temp', range(1, 4), 'link'); ?>
        </div>
        <div class="site-info">
            <a class="logo-link d-b" href="#"><img class="d-b" src="<?php echo e(asset('img/teknik.png')); ?>"
                    alt="logo"></a>
            <p>&copy; 2023 Dikembangkan oleh Muhammad Adi Kurnianto - All Right Reserved</p>
        </div>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/layouts/app.blade.php ENDPATH**/ ?>