<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/admin/dashboard.css')); ?>">
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('js', null, []); ?> 
        <script src="<?php echo e(asset('js/admin/dashboard.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('chart', null, []); ?> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <?php $__env->endSlot(); ?>

    
        <div class="_container">
            <div class="headings flex_align">
                <div class="good">
                    <p>OVERVIEW</p>
                    <h3>Hello, <?php echo e(ucfirst(auth()->user()->first_name)); ?></h3>
                    <p>Statistik toko berdasarkan hari ini</p>
                </div>
                <button class="cta card flex_align">
                    <span class="material-icons">add</span>
                    <a style="text-decoration: none" href="<?php echo e(route('admin.products.create')); ?>"><p>Add Product</p></a>
                </button>
            </div>

            <div class="data_grid">
                <div class="card flex_align">
                    <div class="chart">
                        <canvas id="btc"></canvas>
                    </div>
                    
                    <div class="chart_detail">
                        <h1 class="totalEarning"
                            data-totalBuyAmount="<?php echo e($totalBuyAmount); ?>" 
                            data-totalPaid="<?php echo e($totalPaid); ?>"
                            style="color: rgb(104, 142, 255)">
                            Rp. <?php echo e(number_format($totalPaid, 0, ',', '.')); ?>

                        </h1>
                        <p>Total earnings/order</p>
                    </div>
                </div>
                <div class="card flex_align">
                    <div class="chart">
                        <canvas id="dollar"></canvas>
                    </div>
    
                    <div class="chart_detail">
                        <h1 class="totalUser"
                            data-totalUser="<?php echo e($totalUser); ?>" 
                            data-userHasOrder="<?php echo e($userHasOrder); ?>">
                            <?php echo e($totalUser); ?>

                        </h1>
                        <p>Total customer/place order</p>
                    </div>
                </div>
                <div class="card bar_graph">
                    <div class="product card">
                        <div class="productChart" data-names="<?php echo e($category->implode('title', '-')); ?>" data-values="<?php echo e($category->implode('products_count', '-')); ?>">
                            <canvas id="productCanvas"></canvas>
                        </div>
                    </div>
                </div>
    
                <div class="card notify">
                    <div style="margin: 1rem 0;" class="headings">
                        <h3>Today Latest Orders</h3>
                        <p><?php echo e(now()->format('d l')); ?></p>
                    </div>
                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div>
                            <h1>Rp. <?php echo e(number_format($order->grand_total, 0, ',', '.')); ?></h1>
                            <p>Add-<?php echo e($order->postal_code); ?> | <?php echo e($order->short_name); ?></p>
                        </div>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h3 style="color: darkred">No orders today</h3>    
                    <?php endif; ?>
                   
                </div>
            </div>

        </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>