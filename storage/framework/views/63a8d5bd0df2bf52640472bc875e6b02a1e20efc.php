<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="<?php echo e(asset('css/utilities.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/user/utilities.css')); ?>">
    <?php echo e($style ?? ''); ?>

    
    <link rel="shortcut icon" href="<?php echo e(asset('img/tek2.png')); ?>" />
    <title>Teknik Shop</title>

    <script src="<?php echo e(asset('js/user/utilities.js')); ?>" defer></script>


    <style>
        a[href = "<?php echo e(url()->current()); ?>"]{
            border-bottom: 3px solid var(--site_col_1);
        }
    </style>
</head>
<body class="m-0">
    <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section style="margin-top: 1.5rem;" class="_container">
        <aside>
            <div class="profile_details">
                <img class="d-b" src="<?php echo e(asset('storage/avatar/admin.jpg')); ?>" alt="user">
                <div class="cloak">
                    <h2 class="m-0"><?php echo e(auth()->user()->full_name); ?></h2>
                    <p class="m-0"><?php echo e(auth()->user()->email); ?></p>
                </div>
            </div>
            
            <?php if(auth()->user()->admin): ?>
                <a style="color: blue; margin-top:1em" class="d-b" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
            <?php else: ?>
                <button onclick="toggleForm()" class="cloak">Edit profile</button>
            <?php endif; ?>

            <!-- form -->
            <form class="cloak hide" action="<?php echo e(route('user.profile')); ?>" method="post">
                <?php echo csrf_field(); ?>
                Name <br>
                <input class="input_text" type="text" name="" id=""><br>
                Intro <br>
                <textarea class="input_text"></textarea>

                <input type="submit" value="Save">
                <input onclick="toggleForm()" type="button" value="Cancel">
            </form>
            <!-- form -->
        </aside>
        <main>
            <div class="top_nav">
                <ul class="flex_align">
                    <li>
                        <a class="flex_align" href="<?php echo e(route('user.profile')); ?>">
                            <span class="material-icons">person</span>
                            <div>Profile</div>
                        </a>
                    </li>
                    <li>
                        <a class="flex_align" href="<?php echo e(route('user.orders.index')); ?>">
                            <span class="material-icons">shopping_cart</span>
                            <div>Orders</div>
                        </a>
                    </li>
                    <li>
                        <a class="flex_align" href="<?php echo e(route('user.ship_info')); ?>">
                            <span class="material-icons">credit_card</span>
                            <div>Address/Payments</div>
                        </a>
                    </li>
                    <li>
                        <a class="flex_align" href="<?php echo e(route('user.setting')); ?>">
                            <span class="material-icons">settings</span>
                            <div>Setting</div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- main content -->
            <div style="margin-bottom: 1rem">
                
                <?php echo e($slot); ?>


            </div>
        </main>
    </section>
</body>
</html>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/layouts/user.blade.php ENDPATH**/ ?>