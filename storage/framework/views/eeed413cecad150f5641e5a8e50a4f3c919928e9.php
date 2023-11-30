<?php if (isset($component)) { $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuthLayout::class, []); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p style="color:red"><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
        <form action="<?php echo e(route('register')); ?>" method="POST" autocomplete="off">
            <?php echo csrf_field(); ?>
            <label for="first_name">First Name</label><br>
            <input class="fill_data" type="text" name="first_name" id="first_name" required><br><br>

            <label for="last_name">Last Name</label><br>
            <input class="fill_data" type="text" name="last_name" id="last_name" required><br><br>

            <label for="email">Email</label><br>
            <input class="fill_data" type="email" name="email" id="email" required><br><br>

            <label for="password">Password</label><br>
            <input class="fill_data" type="password" name="password" id="password" required><br><br>

            <label for="password_confirmation">Confirm Password</label><br>
            <input class="fill_data" type="password" name="password_confirmation" id="password_confirmation" required><br><br>
            
            <div>
                <div class="submit">
                    <a href="<?php echo e(route('login')); ?>">Already registered?</a>
                    <input type="submit" value="REGISTER">
                </div>
            </div>
        </form>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/auth/register.blade.php ENDPATH**/ ?>