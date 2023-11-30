<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/cart.css')); ?>">
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('js', null, []); ?> 
        <script src="<?php echo e(asset('js/cart.js')); ?>" defer></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                calculateTotal();
        
                function calculateTotal() {
                    var productTotalElements = document.getElementsByClassName("productTotal");
                    var subtotal = 0;
        
                    for (var i = 0; i < productTotalElements.length; i++) {
                        var productTotalText = productTotalElements[i].textContent.trim(); // Menghapus spasi di awal dan akhir
                        var productTotal = parseFloat(productTotalText.replace("Rp. ", "").replace(",", "").replace(/\s+/g, "")); // Menghapus spasi di tengah-tengah
        
                        if (!isNaN(productTotal)) {
                            subtotal += productTotal;
                        }
                    }
        
                    var subtotalElement = document.getElementById("subtotal");
                    var totalElement = document.getElementById("total");
        
                    if (subtotalElement && totalElement) {
                        subtotalElement.textContent = "Rp. " + formatPrice(subtotal);
                        totalElement.textContent = "Rp. " + formatPrice(subtotal);
                    }
                }
        
                function formatPrice(price) {
                 var formattedPrice = price.toFixed(3).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                return formattedPrice;
                }
            });
        </script>     
     <?php $__env->endSlot(); ?>
    
            <main  class="_container">
                <?php if(count($products)): ?>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td>Quantity</td>
                            <td>Subtotal</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                            <tr>
                                <td>
                                    <div class="product flex_align">
                                        <img class="d-b" src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e($product->title); ?>">
                                        <div class="details">
                                            <a href="<?php echo e(route('product', ['product' => $product->id])); ?>" class="m-0"><?php echo e(ucfirst($product->title)); ?></a>
                                            <p>Price: <?php echo e($product->formatPrice($product->price)); ?></p>
                                            <?php if(auth()->guard()->check()): ?>
                                                <form action="<?php echo e(route('rfc', ['product' => $product->id])); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            <?php endif; ?>
                                            <a onclick="removeCart(this, <?php echo e($product->id); ?>, <?php echo e(auth()->check()); ?>)" class="remove" href="#">Remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php if(auth()->guard()->check()): ?>
                                        <form action="<?php echo e(route('uc', ['product' => $product->id, 'quantity' => 0])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                        </form>
                                    <?php endif; ?>
                                    <input type="number" min="1" max="20" onchange="updateQuantity(<?php echo e($product->id); ?>, this, <?php echo e(auth()->check()); ?>)" value="<?php echo e($product->quantity); ?>">
                                </td>
                                <td class="productTotal"><?php echo e($product->formatPrice($product->price * $product->quantity)); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <table class="subtotal-table ml-auto">
                    <tr>
                        <td>Subtotal</td>
                        <td id="subtotal"></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rp. 0</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td id="total"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="checkout">
                                <a href="<?php echo e(route('checkout')); ?>">Proceed to checkout</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <?php else: ?>
                    <div style="display: grid;place-items:center;padding:2rem 0">
                        <img style="max-width: 100%;" src="<?php echo e(asset('img/cart-empty.png')); ?>" alt="">
                    </div>
                <?php endif; ?>
            </main>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['title' => 'Remove Item','ok' => 'REMOVE']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Remove Item','ok' => 'REMOVE']); ?>
                 <?php $__env->slot('description', null, []); ?> 
                    Are you sure you want to remove this item?
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\hp\laravel-8-ecommerce\resources\views/cart.blade.php ENDPATH**/ ?>