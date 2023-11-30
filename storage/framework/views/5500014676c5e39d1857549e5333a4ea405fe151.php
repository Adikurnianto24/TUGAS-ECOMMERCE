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

    
    <style>
        a[href = "<?php echo e(route('admin.orders.index')); ?>"]{
            color: var(--text-blue);
        }
    </style>
    <div class="_container">
        <a class="back_link" href="<?php echo e(route('admin.orders.index')); ?>">
            <span class="material-icons">arrow_back</span>
            Orders
        </a>
        <h1>ORD-<?php echo e($order->id); ?></h1>
        <p class="flex_align">
            <span class="text_grey">Placed on</span>
            <span class="text_grey text_icon material-icons">calendar_today</span>
            <span><?php echo e($order->created_at->format('d/m/y h:i')); ?></span>
        </p>
        <div class="card" style="margin-bottom: 2rem">
            <h3>Basic info</h3>
            <hr>
            <div class="order_details">
                <span>Customer Name</span>
                <span style="color: #688eff"><?php echo e($order->first_name." ".$order->last_name); ?></span>
            </div>
            <div class="order_details">
                <span>Address</span>
                <span>
                    <Address>
                        <span><?php echo e($order->address_line); ?></span><br>
                        <span><?php echo e($order->postal_code.", ".$order->city." ".$order->country); ?></span>
                    </Address> 
                </span>
            </div>
            <div class="order_details">
                <span>Mobile No.</span>
                <span><?php echo e($order->mobile); ?></span>
            </div>
            <div class="order_details">
                <span>Date</span>
                <span><?php echo e($order->created_at->format('d/m/y h:i')); ?></span>
            </div>
            <div class="order_details">
                <span>Total Amount</span>
                <span><?php echo e($order->grand_total); ?></span>
            </div>
            <div class="order_details">
                <span>Order Status</span>
                <form action="<?php echo e(route('admin.orders.update', ['order' => $order->id])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <select name="status">
                        <option value="<?php echo e($order->status); ?>"><?php echo e($status[$order->status][0]); ?></option>
                        <?php if(! in_array($order->status, ['C', 'D'])): ?>
                            <option value="D">DELIVERED</option>
                        <?php endif; ?>
                    </select><br>
                    <input type="submit" value="Save">
                    <input type="reset" value="Cancel">
                </form>
            </div>
        </div>

        <div class="card" style="margin-bottom: 2rem">
            <h3>Payments</h3>
            <hr>
            <?php $__currentLoopData = $order->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="order_details">
                    <span>Transaction ID</span>
                    <span><?php echo e($transaction->id); ?></span>
                </div>
                <div class="order_details">
                    <span>Payment Method</span>
                    <span><?php echo e($mode[$transaction->mode]); ?></span>
                </div>
                <div class="order_details">
                    <span>Payment Status</span>
                    <form action="<?php echo e(route('admin.transactions.update', ['transaction' => $transaction->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <select name="status">
                            <option value="<?php echo e($transaction->status); ?>"><?php echo e($status[$transaction->status][0]); ?></option>
                            <option value="P">PAID</option>
                        </select><br>
                        <input type="submit" value="Save">
                        <input type="reset" value="Cancel">
                    </form>
                </div>
                <?php if($loop->remaining > 1): ?>
                    <hr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card">
            <h3>Order items</h3>
            <hr>
            
            <div style="overflow-x: auto">
                <table style="width: 100%;min-width:450px" cellspacing="0">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="width: 100px">
                                <div class="img_container">
                                    <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e($product->title); ?>">
                                </div>
                            </td>
                            <td><?php echo e($product->title); ?></td>
                            <td>Rp. <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                            <td><?php echo e($product->pivot->quantity); ?></td>
                            <td>Rp. <?php echo e(number_format($product->pivot->quantity * $product->price, 0, ',', '.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
           
        </div>
    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/orders/order-detail.blade.php ENDPATH**/ ?>