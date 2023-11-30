<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/admin/order.css')); ?>">
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('js', null, []); ?> 
        
     <?php $__env->endSlot(); ?>

    
    <div class="_container">
        <?php if(!$orders->isEmpty()): ?>
        <h1>Orders</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <th>Order(<?php echo e(count($orders)); ?>)</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="flex_align">
                                <div class="sm_card flex_align" style="flex-direction: column">
                                    <strong><?php echo e(strtoupper($order->created_at->format('M'))); ?></strong>
                                    <strong><?php echo e($order->created_at->format('d')); ?></strong>
                                </div>
                                <div>
                                    <strong>ORD-<?php echo e($order->id); ?></strong><br>
                                    <span>Total of Rp.<?php echo e(number_format($order->grand_total, 0, ',', '.')); ?></span>

                                </div>
                            </div>
                        </td>

                        <td><span style="background: <?php echo e($status[$order->status][1]); ?>" class="sm_card status"><?php echo e($status[$order->status][0]); ?></span></td>
                        <td><a href="<?php echo e(route('admin.orders.show', ['order' => $order->id])); ?>">View Order</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php else: ?>
            <p>No orders placed yet,   <a href="<?php echo e(route('admin.products.create')); ?>">Add More Products</a></p>
        <?php endif; ?>

    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/orders/orders.blade.php ENDPATH**/ ?>