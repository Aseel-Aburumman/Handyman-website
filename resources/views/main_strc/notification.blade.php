@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Notification Center</h1>
                <ul class="breadcumb-menu">
                    {{--  <li><a href="{{ route('customer.Home') }}">Home</a></li>  --}}
                    {{--  <li><a href="{{ route('customer.Home') }}">Dashboard</a></li>  --}}
                    {{--  <li>Notification</li>  --}}
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">

            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false">Notification</a>
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">


                <!-- orders Details Tab -->
                <div class="tab-pane fade show active " id="orders" role="tabpanel" aria-labelledby="orders-tab">

                    <div class="card mb-4 shadow-sm"
                        style="border-radius: 10px; background-color: #fff; border-radius: 12px;">
                        <div class="card-header"
                            style="background-color: #F8F9FA; border-bottom: none; border-radius: 12px;">
                            <h5 class="card-title" style="font-weight: bold; color: #333; border-radius: 12px;">
                                Notifications</h5>
                        </div>
                        <div class="card-body" style="padding: 1.5rem;">
                            @if ($notifications && $notifications->count() > 0)
                                @foreach ($notifications as $notification)
                                    <div class="d-flex align-items-center mb-3 p-3 border-bottom"
                                        style="border-color: #e0e0e0;">
                                        <!-- Notification Number -->
                                        <div class="me-3 notification-number">
                                            <span class="badge bg-secondary">{{ $loop->iteration }}</span>
                                        </div>

                                        <!-- Notification Icon -->
                                        <div class="me-3 notification-icon">
                                            @if ($notification->category == 'primary')
                                                <i class="bi bi-exclamation-circle text-primary fs-4"></i>
                                            @elseif ($notification->category == 'success')
                                                <i class="bi bi-check-circle text-success fs-4"></i>
                                            @elseif ($notification->category == 'danger')
                                                <i class="bi bi-x-circle text-danger fs-4"></i>
                                            @elseif ($notification->category == 'warning')
                                                <i class="bi bi-info-circle text-warning fs-4"></i>
                                            @endif
                                        </div>

                                        <!-- Notification Message -->
                                        <div class="flex-grow-1">
                                            <div class="notification-message">
                                                <p class="mb-1" style="font-size: 16px; color: #333;">
                                                    {{ $notification->message }}</p>
                                            </div>
                                            <div class="text-muted notification-date small" style="font-size: 14px;">
                                                {{ $notification->created_at->format('Y-m-d H:i:s') }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center p-3">
                                    <p class="text-muted" style="font-size: 16px;">No notifications available.</p>
                                </div>
                            @endif
                        </div>
                    </div>



                </div>


            </div>

        </div>
    </section>
@endsection
