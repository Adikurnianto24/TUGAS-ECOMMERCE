<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/admin/account.css')); ?>">
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('js', null, []); ?> 
        
     <?php $__env->endSlot(); ?>

    
    <div class="_container">
        <h1>Account</h1><br>
        <p>GENERAL</p>
        <hr>
        <div class="general">
            <div class="profile card">
                <div>
                    <img class="d-b" src="<?php echo e(asset('storage/avatar/admin.jpg')); ?>" alt="admin">
                    <p><?php echo e($user->full_name); ?></p>
                </div>
            </div>
            <form class="details card" action="<?php echo e(route('admin.account.update')); ?>" method="POST">
                    <?php if(session('status')): ?>
                        <p style="grid-column: span 2; color: rgb(20, 236, 20)"><?php echo e(session('status')); ?></p>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p style="grid-column: span 2; color: red"><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php echo csrf_field(); ?>
                    <input type="text" name="first_name" placeholder="First name" value="<?php echo e($user->first_name); ?>" required>
                    <input type="text" name="last_name" placeholder="Last name" value="<?php echo e($user->last_name); ?>" required>
                    <input type="email" name="email" placeholder="Email" value="<?php echo e($user->email); ?>" disabled>
                    <input type="number" name="mobile" value="<?php echo e($user->mobile); ?>" placeholder="Phone number">
                    <textarea name="intro" cols="30" rows="10" placeholder="Describe yourself here..."><?php echo e($user->intro); ?></textarea>

                    <input type="submit" value="Save changes">
            </form>
        </div>


        <p style="margin-top: 3rem">SECURITY</p>
        <hr>
        <div class="security">
            <div class="card change_pwd">
                <h3>Change password</h3>
                <form action="<?php echo e(route('admin.account.pwd')); ?>" method="post">
                    <?php if(session('pwdStatus')): ?>
                        <p style="grid-column: span 2; color: rgb(20, 236, 20)"><?php echo e(session('pwdStatus')); ?></p>
                    <?php endif; ?>

                    <?php if($errors->pwdError->any()): ?>
                        <?php $__currentLoopData = $errors->pwdError->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p style="color: red"><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php echo csrf_field(); ?>
                    <input type="password" name="old" placeholder="Old password" required><br>
                    <input type="password" name="password" placeholder="New password" required><br>
                    <input type="password" name="password_confirmation" placeholder="Confirm password" required><br>
                    <input type="submit" value="Change Password">
                </form>
            </div>
        </div>

    </div>
    <?php if(session('pwdStatus') || $errors->pwdError->any()): ?>
        <script>
            window.scrollTo(0,3000);
        </script>
    <?php endif; ?>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/account.blade.php ENDPATH**/ ?>