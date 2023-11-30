<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/user/order_detail.css')); ?>">
     <?php $__env->endSlot(); ?>
    
    <style>
        a[href = "<?php echo e(route('user.orders.index')); ?>"]{
            border-bottom: 3px solid var(--site_col_1);
        }
    </style>
        <h3>Order Information</h3>
        <div class="grid">
            <div>
                <h4>Order Id #<?php echo e($order->id); ?></h4>
                <hr>
                <div>
                    <div class="flex_align">
                        <span>Order Status</span>
                        <span style="color: <?php echo e($status[$order->status][1]); ?>"><?php echo e($status[$order->status][0]); ?></span>
                    </div>
                    <div class="flex_align">
                        <span>Order Date</span>
                        <span><?php echo e($order->created_at); ?></span>
                    </div>
                    <?php if($order->status == 'N'): ?>
                        <form style="padding: 10px 0" action="<?php echo e(route('user.orders.update', ['order' => $order->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="submit" value="Cancel this order">
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <h4>Shipping Details/Address</h4>
                <hr>
                <div>
                    <Address>
                        <span><?php echo e($order->address_line); ?></span><br>
                        <span><?php echo e($order->postal_code.", ".$order->city." ".$order->country); ?></span>
                    </Address>
                </div>
            </div>
            <div>
                <h4>Billing Details</h4>
                <hr>
                <div>
                    <?php $__currentLoopData = $order->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex_align">
                            <span>Payment Method</span>
                            <span><?php echo e($mode[$transaction->mode]); ?></span>
                        </div>
                        <div class="flex_align">
                            <span>Payment Status</span>
                            <span style="color: <?php echo e($status[$transaction->status][1]); ?>"><?php echo e($status[$transaction->status][0]); ?></span>
                        </div>
                        <?php if($loop->remaining > 1): ?>
                            <hr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div>
                <h4>Order Details</h4>
                <hr>
                <div>
                    <div class="flex_align">
                        <span>Sub Total</span>
                        <span>Rp. <?php echo e(number_format($order->grand_total, 0, ',', '.')); ?></span>

                    </div>
                    <div class="flex_align">
                        <span>Package reciver name</span>
                        <span><?php echo e($order->first_name); ?></span>
                    </div>
                </div>
            </div>

        </div>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:450px" cellspacing="0">
                <thead>
                    <tr>
                        <td colspan="2">Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total Price</td>
                    </tr>
                </thead>
                <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="img_container">
                                <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e($product->title); ?>">
                            </div>
                        </td>
                        <td><?php echo e($product->title); ?></td>
                        <td>Rp. <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                        <td style="text-align: center;"><?php echo e($product->pivot->quantity); ?></td>
                        <td>Rp. <?php echo e(number_format($product->pivot->quantity * $product->price, 0, ',', '.')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107)): ?>
<?php $component = $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107; ?>
<?php unset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/user/view-order.blade.php ENDPATH**/ ?>