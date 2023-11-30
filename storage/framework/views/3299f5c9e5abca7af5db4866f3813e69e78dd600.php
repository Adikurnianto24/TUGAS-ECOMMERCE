<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/product.css')); ?>">
     <?php $__env->endSlot(); ?>
    
        <section>
            <main class="_container">
                <div class="product flex_align">
                    <img style="max-height: 350px; object-fit:cover; width: 250px" src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e($product->title); ?>">
                    <div class="details">
                        <h1><?php echo e(ucfirst($product->title)); ?></h1>
                        <h1><?php echo e($product->formatPrice($product->price)); ?></h1>
                        <p>Category: <?php echo e($product->category->title); ?></p>
                        <p><?php echo e($product->stock_quantity > 0 ? "In Stock" : "Out of Stock"); ?></p>
                        <p><?php echo e(ucfirst($product->about)); ?></p>
                        <?php if($isAdded): ?>
                            <button class="cta" onclick="window.location = '<?php echo e(route('cart')); ?>'">Go to Cart</button>
                        <?php else: ?>
                            <?php if(auth()->guard()->check()): ?>
                                <form action="<?php echo e(route('atc', ['product'=>$product->id])); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="cta">Add to Cart</button>
                                </form>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                                <button class="cta" onclick="addToCart(<?php echo e($product->id); ?>)" data-product="<?php echo e($product->id); ?>">Add to Cart</button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </section>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/product.blade.php ENDPATH**/ ?>