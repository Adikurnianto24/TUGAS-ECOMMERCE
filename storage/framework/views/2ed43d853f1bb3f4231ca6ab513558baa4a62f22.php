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
        <?php if(!$transactions->isEmpty()): ?>
        <h1>Transaction</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <th>Transaction(<?php echo e(count($transactions)); ?>)</th>
                        <th>Amount</th>
                        <th>Payment method</th>
                        <th>Status</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="flex_align">
                                <div class="sm_card" style="border-radius:50%; padding:1rem">
                                    <strong><?php echo e($transaction->order->short_name); ?></strong>
                                </div>
                                <div>
                                    <strong>TXN-<?php echo e($transaction->id); ?></strong><br>
                                    <span><?php echo e($transaction->order->full_name); ?></span>
                                </div>
                            </div>
                        </td>
                        <td>Rp. <?php echo e(number_format($transaction->order->grand_total, 0, ',', '.')); ?></td>
                        <td><?php echo e($mode[$transaction->mode]); ?></td>
                        <td><span style="background: <?php echo e($status[$transaction->status][1]); ?>" class="sm_card status"><?php echo e($status[$transaction->status][0]); ?></span></td>
                        <td><a href="<?php echo e(route('admin.orders.show', ['order' => $transaction->order->id])); ?>">ORD-<?php echo e($transaction->order->id); ?></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php else: ?>
            <p>No transactions made yet <a href="<?php echo e(route('admin.dashboard')); ?>">Go to dashboard</a></p>
        <?php endif; ?>


    </div>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/transaction.blade.php ENDPATH**/ ?>