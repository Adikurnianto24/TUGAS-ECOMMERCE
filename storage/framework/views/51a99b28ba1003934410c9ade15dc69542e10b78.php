<?php $__env->startComponent('mail::message'); ?>
# Your order is on its way.
#   Teknik delivery van

## Hello <?php echo e(ucfirst($order->first_name)); ?>,
We thought you'd like to know that your order is place successfully. Your Order is on its way.
[click here](<?php echo e(route('user.orders.index')); ?>) to track your orders.

<?php $__env->startComponent('mail::panel'); ?>
    ## your package will send to:
    <?php echo e($order->address_line); ?>

    <?php echo e($order->postal_code.", ".$order->city); ?>

    <?php echo e($order->country); ?>

<?php echo $__env->renderComponent(); ?>

Your Item(s) being send by Teknik Transportaion Services. Please note that a signature may be required for the delivery of the package.
<br><br>

## **Order summary**
___
```
Item Subtotal:       Rp.<?php echo e($order->grand_total); ?>

Shipping & Handling: Rp.<?php echo e($extra =  $order->grand_total < 10 ? 5 : 0); ?>

POD Convenience Fee: Rp.0
```
**Shipping Total:** &nbsp; &nbsp; &nbsp; &nbsp; **Rp.<?php echo e($order->grand_total + $extra); ?>**
___
Track your order with the [Teknik App](<?php echo e(route('home')); ?>).
or click the button below.

<?php $__env->startComponent('mail::button', ['url' => 'http://127.0.0.1:8000/user/orders' ]); ?>
Track Your Order
<?php echo $__env->renderComponent(); ?>


Thanks,<br>
**<?php echo e(config('app.name')); ?>.in**
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/emails/orders-shipped.blade.php ENDPATH**/ ?>