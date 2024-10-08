<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">All Products</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('save.deliveryinfo')); ?>" method="POST" class="woocommerce-checkout mt-40">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <div class="col-4 form-group">
                                <input type="text" name="building_no" class="form-control"
                                    placeholder="Apartment, suite, unit etc. (optional)"
                                    value="<?php echo e($deliveryInfo->building_no ?? ''); ?>">
                            </div>
                            <div class="col-4 form-group">
                                <input type="text" name="city" class="form-control" placeholder="Town / City"
                                    value="<?php echo e($deliveryInfo->city ?? ''); ?>">
                            </div>
                            <div class="col-4 form-group">
                                <input type="text" name="location" class="form-control" placeholder="Location"
                                    value="<?php echo e($deliveryInfo->location ?? ''); ?>">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone number"
                                    value="<?php echo e($deliveryInfo->phone ?? ''); ?>">
                            </div>
                            <button type="submit" class="th-btn">Save</button>

                        </div>
                        <h4 class="mt-4">Your Order</h4>
                        <table class="cart_table mb-20">
                            <thead>
                                <tr>
                                    <th class="cart-col-productname">Product Name</th>
                                    <th class="cart-col-quantity">Quantity</th>
                                    <th class="cart-col-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $shoppingCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="cart_item">
                                        <td><?php echo e($item->product->name); ?></td>
                                        <td><?php echo e($item->quantity); ?></td>
                                        <td>JD <?php echo e($item->product->price * $item->quantity); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot class="checkout-ordertable">
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td colspan="2">JD <?php echo e($subtotal); ?></td>
                                </tr>
                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td colspan="2">+1.5 JD</td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td colspan="2"><strong>JD <?php echo e($subtotal + 1.5); ?></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">

                        <div class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method"
                                        value="bacs" checked="checked">
                                    <label for="payment_method_bacs">Cash On Delivery</label>
                                </li>
                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method"
                                        value="cod">
                                    <label for="payment_method_cod">Credit Card</label>
                                </li>
                            </ul>

                            <!-- Card Payment Fields (hidden by default) -->
                            <div id="card-payment-fields" style="display:none;">
                                <div class="form-group">
                                    <input type="text" id="card_number" name="card_number" class="form-control"
                                        placeholder="1234 5678 9123 4567">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="card_expiry" name="card_expiry" class="form-control"
                                        placeholder="MM/YY">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="card_cvc" name="card_cvc" class="form-control"
                                        placeholder="123">
                                </div>
                            </div>

                            <div class="form-row place-order">
                                <button type="submit" class="th-btn" formaction="<?php echo e(route('place.order')); ?>">Place
                                    order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const cardFields = document.getElementById('card-payment-fields');
        const payByCardRadio = document.getElementById('payment_method_cod');
        const payByCashRadio = document.getElementById('payment_method_bacs');

        payByCardRadio.addEventListener('change', function() {
            cardFields.style.display = 'block';
        });

        payByCashRadio.addEventListener('change', function() {
            cardFields.style.display = 'none';
        });

        // Initially hide card fields
        cardFields.style.display = 'none';
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/checkout.blade.php ENDPATH**/ ?>