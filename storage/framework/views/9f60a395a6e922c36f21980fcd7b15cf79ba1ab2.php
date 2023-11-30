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
         <h2>Update category</h2>
         <form class="card" action="<?php echo e(route('admin.categories.update', ['category' => $category->id])); ?>"
             method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
             <?php echo method_field('PUT'); ?>
             Category Name: <input type="text" name="title" value="<?php echo e($category->title); ?>" required
                 placeholder="Category name"><br><br>
             Choose Img: <br><br>
             <input id="up_img" type="file" name="image"><br><br>
             <img id="preview_img" style="max-width: 100px" src="<?php echo e(asset('storage/' . $category->image)); ?>"
                 alt="<?php echo e($category->title); ?>"><br><br>
             <input type="submit" value="Update category">
         </form>
     </div>
     <script>
         // edit
         up_img.onchange = evt => {
             const [file] = up_img.files
             if (file) {
                 preview_img.src = URL.createObjectURL(file)
             }
         }
     </script>
     
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>