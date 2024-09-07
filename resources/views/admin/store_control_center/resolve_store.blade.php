@extends('layouts.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Store Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Stores Control Center</li>
            <li class="breadcrumb-item active">Reported Store</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            {{-- Display success message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

{{-- Store Report Content and Last 15 Reviews in the same row with equal height --}}
<div class="row d-flex align-items-stretch">
    {{-- Store Report Content --}}
    <div class="col-lg-6 d-flex">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Store Report</h5>
                <p>{{ $storeReport->message }}</p>
                <p><strong>Reported By:</strong> {{ $storeReport->user->name }}</p>
            </div>
        </div>
    </div>

    {{-- Last 15 Reviews --}}
    <div class="col-lg-6 d-flex">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Recent Reviews</h5>
                <ul class="list-group">
                    @foreach($storeReviews as $review)
                        <li class="list-group-item">
                            <strong>{{ $review->user->name }}:</strong> {{ $review->review }}
                            <span class="badge bg-primary">{{ $review->rating }} Stars</span>
                            <br>
                            <small>{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


            {{-- Store Products --}}
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Products in Store <span>| Recent</span></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($store->products as $product)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                                        <td>${{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ \Carbon\Carbon::parse($product->created_at)->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Go to Chat Center Button --}}
            {{--  <a href="{{ route('admin.message_user', ['id' => $store->storeOwner->user_id]) }}" class="btn btn-primary btn-lg">
                <i class="bi bi-chat-dots"></i> Go to Chat Center
            </a>  --}}

            {{-- Suspend Store Button --}}

            <div class="d-flex flex-row justify-content-center">
                <form action="{{ route('store_control_center.clearReportStore', $store->id) }}" method="POST">
                    @csrf
                    @method('DELETE')  {{-- This sets the form method to DELETE --}}
                    <button type="submit" class="btn btn-success me-2">Clear the report</button>
                </form>

                @if($store->status->name == 'Suspended')
                <form action="{{ route('store_control_center.unsuspend_store', ['id' => $store->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success ">Unsuspend and notify the client</button>
                </form>
            @else
                <form action="{{ route('store_control_center.suspend_store', ['id' => $store->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure you want to suspend this store?');">Suspend the Store and notify the client</button>
                </form>
            @endif

                {{--  <form action="{{ route('store_control_center.suspend_store', $store->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Suspend the Store and notify the client</button>
                </form>  --}}
            </div>


            {{--  <form action="{{ route('store_control_center.suspend_store', $store->id) }}" method="POST" class="d-inline">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-danger btn-lg">
                    <i class="bi bi-x-circle"></i> Suspend Store
                </button>
            </form>  --}}

        </div>
    </div>
</section>

@endsection
