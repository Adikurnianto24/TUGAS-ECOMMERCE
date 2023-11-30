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
        <h1>Cutomers</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <th>Customer(<?php echo e(count($users)); ?>)</th>
                        <th>Email</th>
                        <th>Verified Email</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="flex_align">
                                <div class="sm_card" style="border-radius:50%; padding:1rem">
                                    <strong><?php echo e($user->short_name); ?></strong>
                                </div>
                                <div>
                                    <strong>ID-<?php echo e($user->id); ?></strong><br>
                                    <span><?php echo e($user->full_name); ?></span>
                                </div>
                            </div>
                        </td>
                        <td><?php echo e($user->email); ?></td>
                        <td><span style="color: <?php echo e($user->email_verified_at ? 'limegreen' : 'red'); ?>"><?php echo e($user->email_verified_at ? "YES" : "NO"); ?></span></td>
                        <td><span style="color: <?php echo e($user->admin ? 'limegreen' : 'red'); ?>"><?php echo e($user->admin ? "YES" : "NO"); ?></span></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/customer.blade.php ENDPATH**/ ?>