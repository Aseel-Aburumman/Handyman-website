<?php $__env->startSection('content'); ?>
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








    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">

            


            <form action="#" class="woocommerce-checkout mt-40">
                <div class="row ">
                    <div class="col-lg-7">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <form action="">
                                <div class="col-4 form-group">
                                    <input type="text" class="form-control"
                                        placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                                <div class="col-4 form-group">
                                    <input type="text" class="form-control" placeholder="Town / City">
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" placeholder="location">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Phone number">
                                </div>
                                <button type="submit" class="th-btn">Save</button>

                            </form>

                        </div>
                        <h4 class="mt-4 pt-lg-2">Your Order</h4>

                        <div class="row">
                            <form action="#" class="woocommerce-cart-form">
                                <table class="cart_table mb-20">
                                    <thead>
                                        <tr>
                                            <th class="cart-col-productname">Product Name</th>
                                            <th class="cart-col-quantity">Quantity</th>
                                            <th class="cart-col-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">

                                            <td data-title="Name">
                                                <a class="cart-productname" href="shop-details.html">Coffee Red Mug</a>
                                            </td>

                                            <td data-title="Quantity">
                                                <strong class="product-quantity">01</strong>
                                            </td>
                                            <td data-title="Total">
                                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="checkout-ordertable">
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal" colspan="4"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span>
                                            </td>
                                        </tr>
                                        <tr class="woocommerce-shipping-totals shipping">
                                            <th>Shipping</th>
                                            <td data-title="Shipping" colspan="4"> Enter your address to view shipping
                                                options.
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total" colspan="4"><strong><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-4">


                        <div class="mt-lg-3 mb-30">
                            <div class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"
                                            name="payment_method" value="bacs" checked="checked">
                                        <label for="payment_method_bacs">Cash On Delivery</label>
                                        <div class="payment_box payment_method_bacs">
                                            <p>Pay with cash upon delivery.
                                            </p>
                                        </div>
                                    </li>

                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio"
                                            name="payment_method">
                                        <label for="payment_method_cod">Credit Cart</label>
                                        <div class="payment_box payment_method_cod">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as
                                                the payment reference. Your order will not be shipped until the funds have
                                                cleared in our account.

                                            </p>
                                        </div>
                                    </li>

                                </ul>

                                <!-- Card Payment Fields -->
                                <div id="card-payment-fields style="display:none;">

                                    <div class="form-group">

                                        <label for="card_number">
                                            <p>You may see a temporary hold on your payment method in the amount of your
                                                Tasker's
                                                hourly rate. Don't worry - you're only billed when your task is complete!
                                            </p>
                                        </label> <input type="text" id="card_number" name="card_number"
                                            class="form-control" placeholder="1234 5678 9123 4567">
                                    </div>
                                    <div class="form-group">
                                        <label for="card_expiry">Expiry Date</label>
                                        <input type="text" id="card_expiry" name="card_expiry" class="form-control"
                                            placeholder="MM/YY">
                                    </div>
                                    <div class="form-group">
                                        <label for="card_cvc">CVC</label>
                                        <input type="text" id="card_cvc" name="card_cvc" class="form-control"
                                            placeholder="123">
                                    </div>
                                    <div class="form-group">
                                        <label for="card_name">Cardholder Name</label>
                                        <input type="text" id="card_name" name="card_name" class="form-control"
                                            placeholder="Cardholder Name">
                                    </div>
                                </div>
                                <div class="form-row place-order">
                                    <button type="submit" class="th-btn">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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

                // Initially show card fields
                cardFields.style.display = 'block';
            </script>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/checkout.blade.php ENDPATH**/ ?>