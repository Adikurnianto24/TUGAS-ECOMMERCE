<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        
     <?php $__env->endSlot(); ?>

    
        <div class="_container">
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p style="color: red"><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <h2>Create a new product</h2>
            <form class="card" action="<?php echo e(route('admin.products.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <fieldset style="max-width: 200px">
                    <legend>Category</legend>
                    <select name="category_id" required>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('category_id') == $category->id): ?>
                                <option selected value="<?php echo e($category->id); ?>"><?php echo e(ucfirst($category->title)); ?></option>
                                <?php continue; ?>
                            <?php endif; ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e(ucfirst($category->title)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </fieldset><br>

                Product Name: <input type="text" name="title" value="<?php echo e(old('title')); ?>" required placeholder="Product name"><br><br>

                Choose Img: <br><br>
                <input type="file" name="image" required><br><br>

                Product info: <input type="text" name="about" value="<?php echo e(old('about')); ?>" required placeholder="Product info"><br><br>

                Product price: <input type="number" name="price" min="0" value="<?php echo e(old('price')); ?>" required><br><br>

                Product stock quantity: <input type="number" min="0" name="stock_quantity" value="<?php echo e(old('stock_quantity')); ?>" required><br><br>

                Product discount: <input type="number" min="0" value="<?php echo e(old('discount')); ?>" name="discount" step="5"><br><br>

                <input type="submit" value="Create product">
            </form>
        </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/products/create.blade.php ENDPATH**/ ?>