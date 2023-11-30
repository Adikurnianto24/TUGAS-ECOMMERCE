<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- styleSheets -->
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/utilities.css')); ?>">
        <?php echo e($style); ?>


    <link rel="shortcut icon" href="<?php echo e(asset('img/tek2.png')); ?>" />
    <title>Teknik Shop</title>

    <!-- scripts -->
    <script src="<?php echo e(asset('js/admin/utilities.js')); ?>" defer></script>        
    <?php echo e($js ?? ''); ?>

    
    <?php echo e($chart ?? ''); ?>    
    
    <style>
        a[href = "<?php echo e(url()->current()); ?>"]{
            color: var(--text-blue);
        }
    </style>
</head>
<body class="m-0">
    <div class="cover"></div>


    <nav>
        <span class="ham material-icons">menu</span>
        <a id="nav_logo" class="d-b" href="#"><img class="fit_img" src="<?php echo e(asset('img/tek2.png')); ?>" alt="logo"></a>
        <div class="nav_admin">
            <img class="fit_img admin_img" src="<?php echo e(asset('storage/avatar/admin.jpg')); ?>" alt="admin_img">
        </div>
    </nav>


    <aside>
        <div id="aside_logo">
            <a class="d-b" href="#"><img class="fit_img" src="<?php echo e(asset('img/b.png')); ?>" alt="logo"></a>
        </div>
        <div id="aside_admin">
            <div class="card flex_align">
                <img class="fit_img admin_img" src="<?php echo e(asset('storage/avatar/admin.jpg')); ?>" alt="admin_img">
                <div>
                    <h6><?php echo e(auth()->user()->full_name); ?></h6>
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input class="logout" type="submit" value="Logout">
                    </form>
                </div>
            </div>
        </div>
        <div class="aside_main">
            <ul>
                <li>GENERAL</li>
                <ul>
                    <li class="list_item">
                        <a class="flex_align" href="<?php echo e(route('admin.dashboard')); ?>">
                            <span class="material-icons">dashboard</span>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="list_item">
                        <a class="flex_align" href="<?php echo e(route('admin.transactions.index')); ?>">
                            <span class="material-icons">paid</span>
                            <div>Transactions</div>
                        </a>
                    </li>
                    <li class="list_item">
                        <a class="flex_align" href="<?php echo e(route('admin.account')); ?>">
                            <span class="material-icons">person</span>
                            <div>Account</div>
                        </a>
                    </li>
                </ul>
            </ul>
            <ul style="margin: 1.5rem 0;">
                <li>MANAGEMENT</li>
                <ul style="margin-bottom: 5rem">
                    <li class="list_item">
                        <a class="flex_align" href="<?php echo e(route('admin.customers')); ?>">
                            <span class="material-icons">people</span>
                            <div>Customers</div>
                        </a>
                    </li>
                    <li class="list_item has-sub">
                        <a class="flex_align" href="#">
                            <span class="material-icons">shopping_bag</span>
                            <div>Products</div>
                            <span class="arrow material-icons">arrow_drop_down</span>
                        </a>
                        <div class="products sub">
                            <a href="<?php echo e(route('admin.products.index')); ?>">List</a>
                            <a href="<?php echo e(route('admin.products.create')); ?>">Create</a>
                        </div>
                    </li>
                    <li class="list_item has-sub">
                        <a class="flex_align" href="#">
                            <span class="material-icons">category</span>
                            <div>Categories</div>
                            <span class="arrow material-icons">arrow_drop_down</span>
                        </a>
                        <div class="categories sub">
                            <a href="<?php echo e(route('admin.categories.index')); ?>">List</a>
                            <a href="<?php echo e(route('admin.categories.create')); ?>">Create</a>
                        </div>
                    </li>
                    <li class="list_item">
                        <a class="flex_align" href="<?php echo e(route('admin.orders.index')); ?>">
                            <span class="material-icons">shopping_cart</span>
                            <div>Orders</div>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
    </aside>
    <main>
        
        <?php echo e($slot); ?>

        
    </main>
</body>
</html><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/layouts/admin.blade.php ENDPATH**/ ?>