<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!-- Include CSS and JavaScript -->
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('js', null, []); ?> 
        <script src="<?php echo e(asset('js/checkout.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>

    <!-- Main content -->
    <main class="_container">
        <div class="checkout_order">
            <div class="checkout">
                <h1>Checkout</h1>
                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p style="color: red"><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <strong style="cursor: pointer;" onclick="fillForm(this)">Fill My Details -></strong>
                <?php endif; ?>
                <form action="<?php echo e(route('checkout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <h2>Billing Details</h2>
                    <div class="form_group">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="address">Address Line</label>
                        <input id="address" type="text" name="address_line" value="<?php echo e(old('address_line')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="city">City</label>
                        <input id="city" type="text" name="city" value="<?php echo e(old('city')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="postal_code">Postal Code</label>
                        <input id="postal_code" type="text" name="postal_code" value="<?php echo e(old('postal_code')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="country">Country</label>
                        <input id="country" type="text" name="country" value="<?php echo e(old('country')); ?>" required>
                    </div>
                    <div class="form_group">
                        <label for="mobile">Mobile No.</label>
                        <input id="mobile" type="text" name="mobile" value="<?php echo e(old('mobile')); ?>" required>
                    </div>
                    <!-- Add other billing details fields here -->

                    <h2>Payment Details</h2>
                    <input type="checkbox" name="cod" value="1" id="cod" required>
                    <label for="cod">Cash On Delivery</label>

                    <button type="submit">Order Now</button>
                </form>
            </div>

            <!-- Display order summary -->
            <div class="order">
                <div class="card">
                    <h2>Your Order</h2>
                    <div class="flex_align">
                        <strong>Sub Total</strong>
                        <span>Rp.<?php echo e(number_format($subTotal, 0, ',', '.')); ?></span>
                    </div>
                    <div class="flex_align">
                        <strong>Discount</strong>
                        <span>Rp.<?php echo e(number_format($discount, 0, ',', '.')); ?></span>
                    </div>
                    <div class="flex_align">
                        <strong>Tax</strong>
                        <span>Rp.<?php echo e(number_format($tax, 0, ',', '.')); ?></span>
                    </div>
                    <div class="flex_align">
                        <strong>Shipping Cost</strong>
                        <span>Rp.<?php echo e(number_format($shippingCost, 0, ',', '.')); ?></span>
                    </div>
                    <div class="flex_align">
                        <h3>Total Cost</h3>
                        <span>Rp.<?php echo e(number_format($totalCost, 0, ',', '.')); ?></span>
                    </div>
                </div>
            </div>                      
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/checkout.blade.php ENDPATH**/ ?>