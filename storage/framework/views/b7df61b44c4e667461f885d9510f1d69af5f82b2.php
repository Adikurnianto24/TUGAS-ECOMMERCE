<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    <h3>Your Address</h3>
        <?php if($address = auth()->user()->addresses()->first()): ?>
            <div class="details_card">
                <strong>Address line : </strong><span><?php echo e($address->address_line); ?></span><br>
                <strong>City : </strong><span><?php echo e($address->city); ?></span><br>
                <strong>Postal code : </strong><span><?php echo e($address->postal_code); ?></span><br>
                <strong>Country : </strong><span><?php echo e($address->country); ?></span><br>
            </div><br><br>
        <?php else: ?>
            <form action="<?php echo e(route('fake_addr')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="submit" value="generate fake address">
            </form>
        <?php endif; ?>
    <hr>    
    <h3>Your payments deatails</h3>
        <?php if($payment = auth()->user()->payments()->first()): ?>
        <div class="details_card">
            <strong>Card type : </strong><span><?php echo e($payment->card_type); ?></span><br>
            <strong>Card number : </strong><span>************<?php echo e(substr($payment->card_number, -4)); ?></span><br>
        </div>
        <?php else: ?>
            <form action="<?php echo e(route('fake_pay')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="submit" value="generate fake payment details">
            </form>
        <?php endif; ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107)): ?>
<?php $component = $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107; ?>
<?php unset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/user/ship_info.blade.php ENDPATH**/ ?>