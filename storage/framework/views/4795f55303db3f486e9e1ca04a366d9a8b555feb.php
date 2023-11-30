<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/shop.css')); ?>">
     <?php $__env->endSlot(); ?>
    
     <?php $__env->slot('js', null, []); ?> 
        <script src="<?php echo e(asset('js/shop.js')); ?>" defer></script>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('search', null, []); ?> 
        <?php echo e($search); ?>

     <?php $__env->endSlot(); ?>
    
     <section class="_container">
         <aside>
             <div class="close-btn" onclick="t_aside()"><span class=" material-icons">close</span></div>
            <div class="filter">
                <div class="category">
                    <h3>Category</h3>
                    <ul>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li style="color:<?php echo e($item->id == $cate ? '#3da8f3':''); ?>" onclick="updateQuery('category', <?php echo e($item->id); ?>)"><?php echo e(ucfirst($item->title)); ?></li>   
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="sort">
                <h3>Sort</h3>
                <ul>
                    <li style="color:<?php echo e('ASC' == $sort ? '#3da8f3':''); ?>" onclick="updateQuery('sort', 'ASC')">Price: Terendah to Tertinggi</li>
                    <li style="color:<?php echo e('DESC' == $sort ? '#3da8f3':''); ?>" onclick="updateQuery('sort', 'DESC')">Price: Tertinggi to Terendah</li>
                </ul>
            </div>
         </aside>
         <main class="_container">
             <?php if($products->isNotEmpty()): ?>
             <div>
                 <div class="filter-sort">
                     <button>Filter</button>
                     <button>Sort</button>
                 </div>
             </div>
             <?php endif; ?>
            <div class="products-section">
                
                <?php if($products->isNotEmpty()): ?>
                    <div class="products-container products-grid">
                        <?php echo $__env->renderEach('components.product', $products, 'product'); ?>
                    </div>
                <?php else: ?>
                    <div style="display: grid;place-items:center">
                        <img style="max-width: 100%" src="<?php echo e(asset('img/no-product-found.png')); ?>" alt="">
                    </div>
                <?php endif; ?>
            </div>
         </main>
     </section>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/shop.blade.php ENDPATH**/ ?>