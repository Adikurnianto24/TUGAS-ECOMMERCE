<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('js', null, []); ?> 
        <script src="<?php echo e(asset('js/admin/category.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>

    
    <div class="_container">
        <?php if(session('status')): ?>
            <p style="color: #3ee33e">
                <?php echo e(session('status')); ?>

            </p>
        <?php endif; ?>
        <?php if(!$categories->isEmpty()): ?>
        <h1>Categories</h1><br>

        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:450px" class="card">
                <thead>
                    <tr>
                        <td colspan="2">Category(<?php echo e(count($categories)); ?>)</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="img_container img_cate">
                                <img src="<?php echo e(asset('storage/'.$category->image)); ?>" alt="<?php echo e($category->title); ?>">
                            </div>
                        </td>
                        <td><?php echo e($category->title); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.categories.edit', ['category' => $category->id])); ?>">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                        <td>
                            <span class="material-icons delete" data-remove="<?php echo e($category->id); ?>">delete</span>
                        </td>
                        <form data-form="<?php echo e($category->id); ?>" style="display: none" action="<?php echo e(route('admin.categories.destroy', ['category' => $category->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php else: ?>
            <p>No categories created yet <a href="<?php echo e(route('admin.categories.create')); ?>">CREATE</a></p>
        <?php endif; ?>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['title' => 'Delete Category','ok' => 'DELETE']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Delete Category','ok' => 'DELETE']); ?>
         <?php $__env->slot('description', null, []); ?> 
            Are you sure you want to delete this category?
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/categories/categories.blade.php ENDPATH**/ ?>