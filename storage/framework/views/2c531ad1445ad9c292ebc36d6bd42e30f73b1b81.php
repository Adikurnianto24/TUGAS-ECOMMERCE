<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    
    
        <?php if(! $orders->isEmpty()): ?>
        <h2>My Orders</h2>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:450px" cellspacing="0">
                <thead>
                    <tr>
                        <td>Order Id</td>
                        <td>Order Date</td>
                        <td>Price</td>
                        <td>Status</td>
                        <td>Details</td>
                    </tr>
                </thead>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->created_at); ?></td>
                        <td>Rp.<?php echo e($order->grand_total); ?></td>
                        <td style="color: <?php echo e($status[$order->status][1]); ?>"><?php echo e($status[$order->status][0]); ?></td>
                        <td class="message"><a href="<?php echo e(route('user.orders.show', ['order' => $order->id])); ?>">View Order</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php else: ?>
            <h3 class="message">No Order placed yet <a href="<?php echo e(route('shop')); ?>">Shop now</a></h3 >
        <?php endif; ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107)): ?>
<?php $component = $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107; ?>
<?php unset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/user/orders.blade.php ENDPATH**/ ?>