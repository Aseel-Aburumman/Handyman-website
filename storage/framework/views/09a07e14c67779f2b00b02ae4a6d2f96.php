<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">All Products</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <?php if(Auth::user()->role_id == 2): ?>
                        <!-- Customer Dashboard -->
                        <li><a href="<?php echo e(route('customer.dashboard')); ?>">Dashboard</a></li>
                    <?php elseif(Auth::user()->role_id == 3): ?>
                        <!-- Store Owner Dashboard -->
                        <li><a href="<?php echo e(route('storeowner.dashboard')); ?>">Dashboard</a></li>
                    <?php elseif(Auth::user()->role_id == 4): ?>
                        <!-- Handyman Dashboard -->
                        <li><a href="<?php echo e(route('handyman.dashboard')); ?>">Dashboard</a></li>
                    <?php endif; ?>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="th-cart-wrapper  space-top space-extra-bottom">
        <div class="container">
            
            
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $shoppingCarts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $product = $cartItem->product;
                                $total = $product->price * $cartItem->quantity;
                            ?>
                            <tr class="cart_item">
                                <td data-title="Product">
                                    <a class="cart-productimage"
                                        href="<?php echo e(route('product', ['productId' => $product->id])); ?>">
                                        <img width="91" height="91"
                                            src="<?php echo e($product->image ? asset('storage/product_images/' . $product->image->name) : asset('assets/img/product/product_1_2.png')); ?>"
                                            alt="Image">
                                    </a>
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname"
                                        href="<?php echo e(route('product', ['productId' => $product->id])); ?>">
                                        <?php echo e($product->name); ?>

                                    </a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>JD</span><?php echo e($product->price); ?></bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button class="quantity-minus qty-btn"><i class="fa-solid fa-minus"></i></button>
                                        <input type="number" class="qty-input" value="<?php echo e($cartItem->quantity); ?>"
                                            min="1" max="99" data-product-id="<?php echo e($cartItem->product_id); ?>">
                                        <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><bdi><span>JD</span><span
                                                class="total"><?php echo e($total); ?></span></bdi></span>
                                </td>
                                <td data-title="Remove">
                                    <a href="#" class="remove" data-product-id="<?php echo e($cartItem->product_id); ?>"><i
                                            class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <script>
                            $(document).ready(function() {
                                // Handle quantity increase and decrease
                                $('.qty-btn').on('click', function() {
                                    var $button = $(this);
                                    var $input = $button.siblings('.qty-input');
                                    var quantity = parseInt($input.val());
                                    var productId = $input.data('product-id');

                                    // Determine if we are increasing or decreasing the quantity
                                    //if ($button.hasClass('quantity-plus')) {
                                    //    quantity++;
                                    //} else if ($button.hasClass('quantity-minus') && quantity > 1) {
                                    //    quantity--;
                                    //}

                                    $input.val(quantity);

                                    // Send AJAX request to update quantity in the database
                                    $.ajax({
                                        url: '<?php echo e(route('cart.update')); ?>',
                                        method: 'POST',
                                        data: {
                                            _token: '<?php echo e(csrf_token()); ?>',
                                            productId: productId,
                                            quantity: quantity
                                        },
                                        success: function(response) {
                                            // Update total for the specific item
                                            $button.closest('tr').find('.total').text(response.newTotal);

                                            // Update the order total
                                            updateOrderTotal(response.cartTotal);
                                        },
                                        error: function(xhr) {
                                            console.log(xhr.responseText);
                                        }
                                    });
                                });

                                // Handle item removal
                                $('.remove').on('click', function(e) {
                                    e.preventDefault();
                                    var productId = $(this).data('product-id');
                                    var $row = $(this).closest('tr');

                                    // Send AJAX request to remove item from cart
                                    $.ajax({
                                        url: '<?php echo e(route('cart.remove')); ?>',
                                        method: 'POST',
                                        data: {
                                            _token: '<?php echo e(csrf_token()); ?>',
                                            productId: productId
                                        },
                                        success: function(response) {
                                            // Remove the row from the table
                                            $row.remove();

                                            // Update the order total
                                            updateOrderTotal(response.cartTotal);
                                        },
                                        error: function(xhr) {
                                            console.log(xhr.responseText);
                                        }
                                    });
                                });

                                // Function to update the order total in the tfoot
                                function updateOrderTotal(cartTotal) {
                                    $('.order-total .amount bdi').html('<span>$</span>' + cartTotal);
                                }
                            });
                        </script>





                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td></td>
                            <td></td>

                            <td></td>
                            <td>Order Total</td>


                            <td data-title="Total">
                                <strong><span class="amount amount-total-cart"><bdi><span>$</span><span
                                                id="cart-total"><?php echo e($totalCartAmount); ?></span></bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>

                </table>
                <div class="wc-proceed-to-checkout mb-30">
                    <a href="<?php echo e(route('checkout')); ?>" class="th-btn">Proceed to checkout</a>
                </div>
        </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/cart.blade.php ENDPATH**/ ?>