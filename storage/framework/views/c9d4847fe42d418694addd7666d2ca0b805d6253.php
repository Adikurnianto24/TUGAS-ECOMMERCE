<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
     <?php $__env->endSlot(); ?>

    

    <section class="hero">
        <div class="hero-inner">
            <h1 class="m-0">Teknik Shop</h1>
            <h3>Lanjut belanja untuk keperluan mu!</h3>
            <a class="d-b" href="<?php echo e(route('shop')); ?>">Belanja</a>
        </div>
    </section>
    <section class="featured-products _container">
        <h2 style="font-family: 'Roboto', sans-serif;">Pilih Produk yang ingin kamu beli</h2>
        <div class="home-grid">
            <?php echo $__env->renderEach('components.product', $products, 'product'); ?>
        </div>
        <a href="<?php echo e(route('shop')); ?>" class="cta">Tampilkan semua</a>
    </section>
    <section class="categories _container">
        <h2 style="font-family: 'Roboto', sans-serif;">Product Categories</h2>
        <div class="home-grid">
            <?php echo $__env->renderEach('components.category', $categories, 'cate'); ?>
        </div>
    </section>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/home.blade.php ENDPATH**/ ?>