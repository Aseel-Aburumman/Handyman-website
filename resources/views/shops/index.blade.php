@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.StoreDashboard') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                    <li>{{ __('messages.StoreDashboard') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="overflow-hidden space" id="service-sec">

        <div class="container">
            <div class="row">
                <!-- Statistics Section -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-users"></i> {{ __('messages.Customers') }}

                            </h5>
                            <p class="card-text">{{ $customerCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-file-invoice-dollar"></i> # {{ __('messages.Transactions') }}

                            </h5>
                            <p class="card-text">{{ $transactionCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-box"></i> {{ __('messages.QuantityOrdered') }}

                            </h5>
                            <p class="card-text">{{ number_format($totalQuantityOrdered) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-user-tie"></i> {{ __('messages.TopCustomer') }}

                            </h5>
                            <p class="card-text">{{ $topCustomer }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trend by Customer Visits & Quantity Ordered -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-chart-line"></i> {{ __('messages.Trend') }}
                        </div>
                        <div class="card-body">
                            <canvas id="orderTrendChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Customers to Target -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-bullseye"></i> {{ __('messages.CustomersTarget') }}
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($customersToTarget as $customer => $count)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>{{ $customer }}</span>
                                        <span>{{ $count }} {{ __('messages.orders') }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customers with Last Purchase Date -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-calendar-alt"></i> {{ __('messages.CustomersPurchase') }}
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.CustomerName') }}</th>
                                        <th>{{ __('messages.PurchaseDate') }}</th>
                                        <th>{{ __('messages.LastPurchase') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customersWithLastPurchase as $customer)
                                        <tr>
                                            <td>{{ $customer['name'] }}</td>
                                            <td>{{ $customer['last_purchase_date'] }}</td>
                                            <td>{{ $customer['days_since_last_purchase'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('orderTrendChart').getContext('2d');
        var orderTrendChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($months),
                datasets: [{
                    label: 'Quantity Ordered',
                    data: @json($quantities),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                }]
            }
        });
    </script>
@endsection
