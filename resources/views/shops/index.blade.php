@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Dashboard</h1>
                <ul class="breadcumb-menu">
                    {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}
                    <li>Dashboard</li>
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
                            <i class="fas fa-users"></i> Customers
                        </h5>
                        <p class="card-text">{{ $customerCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="fas fa-file-invoice-dollar"></i> # Transactions
                        </h5>
                        <p class="card-text">{{ $transactionCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="fas fa-box"></i> Quantity Ordered
                        </h5>
                        <p class="card-text">{{ number_format($totalQuantityOrdered) }}K</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="fas fa-user-tie"></i> Top Customer
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
                        <i class="fas fa-chart-line"></i> Trend by Customer Visits & Qty Ordered
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
                        <i class="fas fa-bullseye"></i> Customers to Target
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($customersToTarget as $customer => $count)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>{{ $customer }}</span>
                                    <span>{{ $count }} orders</span>
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
                        <i class="fas fa-calendar-alt"></i> Customers with Last Purchase Date
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Last Purchase Date</th>
                                    <th>Days Since Last Purchase</th>
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

