<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('js', null, []); ?> 
        <script src="<?php echo e(asset('js/admin/product.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>

    
    <div class="_container">
        <?php if(session('status')): ?>
            <p style="color: #3ee33e">
                <?php echo e(session('status')); ?>

            </p>
        <?php endif; ?>
        <?php if(!$products->isEmpty()): ?>
        <h1>Products</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <td></td>
                        <td>Product(<?php echo e(count($products)); ?>)</td>
                        <td>Price</td>
                        <td>Stock quantity</td>
                        <td>Discount</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="img_container">
                                <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e($product->title); ?>">
                            </div>
                        </td>
                        <td><?php echo e(ucfirst($product->title)); ?></td>
                        <td><?php echo e($product->formatPrice($product->price)); ?></td>
                        <td><?php echo e($product->stock_quantity.' UNIT'); ?></td>
                        <td><?php echo e($product->discount.'%'); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.products.edit', ['product' => $product->id])); ?>">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                        <td>
                            <span class="material-icons delete" data-remove="<?php echo e($product->id); ?>">delete</span>
                        </td>
                        <form data-form="<?php echo e($product->id); ?>" style="display: none" action="<?php echo e(route('admin.products.destroy', ['product' => $product->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php else: ?>
            <p>No products avialable in stock <a href="<?php echo e(route('admin.products.create')); ?>">CREATE</a></p>
        <?php endif; ?>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['title' => 'Delete product','ok' => 'DELETE']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Delete product','ok' => 'DELETE']); ?>
         <?php $__env->slot('description', null, []); ?> 
            Are you sure you want to delete this product?
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
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/products/products.blade.php ENDPATH**/ ?>