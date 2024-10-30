@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.Checkout') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li>{{ __('messages.Cart') }}
                    </li>
                    <li>{{ __('messages.Checkout') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('save.deliveryinfo') }}" method="POST" class="woocommerce-checkout mt-40">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="h4">{{ __('messages.BillingDetails') }}
                        </h2>
                        <div class="row">
                            <div class="col-4 form-group">
                                <input type="text" name="building_no" class="form-control"
                                    placeholder="Apartment, suite, unit etc. (optional)"
                                    value="{{ $deliveryInfo->building_no ?? '' }}">
                            </div>
                            <div class="col-4 form-group">
                                <input type="text" name="city" class="form-control" placeholder="Town / City"
                                    value="{{ $deliveryInfo->city ?? '' }}">
                            </div>
                            <div class="col-4 form-group">
                                <input type="text" name="location" class="form-control" placeholder="Location"
                                    value="{{ $deliveryInfo->location ?? '' }}">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone number"
                                    value="{{ $deliveryInfo->phone ?? '' }}">
                            </div>
                            <button type="submit" class="th-btn">{{ __('messages.Save') }}
                            </button>

                        </div>
                        <h4 class="mt-4">{{ __('messages.YourOrder') }}
                        </h4>
                        <table class="cart_table mb-20">
                            <thead>
                                <tr>
                                    <th class="cart-col-productname">{{ __('messages.ProductName') }}
                                    </th>
                                    <th class="cart-col-quantity">{{ __('messages.Quantity') }}</th>
                                    <th class="cart-col-total">{{ __('messages.Total') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shoppingCartItems as $item)
                                    <tr class="cart_item">
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ __('messages.JD') }} {{ $item->product->price * $item->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="checkout-ordertable">
                                <tr class="cart-subtotal">
                                    <th>{{ __('messages.Subtotal') }}</th>
                                    <td colspan="2">{{ __('messages.JD') }} {{ $subtotal }}</td>
                                </tr>
                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>{{ __('messages.Shipping') }}</th>
                                    <td colspan="2">+1.5 {{ __('messages.JD') }}</td>
                                </tr>
                                <tr class="order-total">
                                    <th>{{ __('messages.Total') }}</th>
                                    <td colspan="2"><strong>{{ __('messages.JD') }} {{ $subtotal + 1.5 }}</strong></td>
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
                                    <label for="payment_method_bacs">{{ __('messages.COD') }}</label>
                                </li>
                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method"
                                        value="cod">
                                    <label for="payment_method_cod">{{ __('messages.CreditCard') }}</label>
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
                                <button type="submit" class="th-btn"
                                    formaction="{{ route('place.order') }}">{{ __('messages.Placeorder') }}</button>
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
@endsection
