<?php if (isset($component)) { $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuthLayout::class, []); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    <?php if(session('status')): ?>
    <h2 style="color:rgb(32, 221, 32)"><?php echo e(session("status")); ?></h2>
    <?php endif; ?>
     
    <p class="m-0">
        Before getting started, could you verify your email address by clicking on the link we had emailed to you? If you didn't receive the email, we will gladly send you another.
    </p>
    <p>Email is arrived between 1 to 3 minutes after the registration, Check your inbox <strong><?php echo e(auth()->user()->email); ?></strong></p>
        
    <div class="flex_align_center">
        <form method="POST" action="<?php echo e(route('verification.send')); ?>">
            <?php echo csrf_field(); ?>
            <input type="submit" value="RESEND VERIFICATION EMAIL">
        </form>
        
        <form method="POST" id="logout" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <a href="#" onclick="logout.submit()">Log Out</a>
        </form>
    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>