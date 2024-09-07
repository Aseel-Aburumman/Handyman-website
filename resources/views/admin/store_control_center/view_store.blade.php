@extends('layouts.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Store Control Panel</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item ">Store Control Center</li>
            <li class="breadcrumb-item active">Store Info Edit</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
     {{-- Display success message --}}
     @if (session('success'))
     <div class="alert alert-success">
         {{ session('success') }}
     </div>
 @endif
    <div class="row">
        <!-- Store Details Section -->
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body profile-card pt-4">
                    <h2 class="card-title">Store Details</h2>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Store Name</div>
                        <div class="col-lg-4 col-md-8">{{ $store->name ?? 'Not provided' }}</div>
                        <div class="col-lg-2 col-md-4 label">Address</div>
                        <div class="col-lg-4 col-md-8">{{ $store->location ?? 'Not provided' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Contact Number</div>
                        <div class="col-lg-4 col-md-8">{{ $store_owner->storeOwner->contact_number ?? 'Not provided' }}</div>
                        <div class="col-lg-2 col-md-4 label">Certificate ID</div>
                        <div class="col-lg-4 col-md-8">{{ $store_owner->storeOwner->certificate_id ?? 'Not provided' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Store Description</div>
                        <div class="col-lg-4 col-md-8">{{ $store->description ?? 'Not provided' }}</div>
                        <div class="col-lg-2 col-md-4 label">Store Status</div>
                        <div class="col-lg-4 col-md-8">{{ $store->status->name ?? 'Not provided' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Store Rating</div>
                        <div class="col-lg-4 col-md-8">{{ $store->rating ?? 'Not provided' }}</div>
                    </div>

                    <!-- Suspend Store Button -->
                    <div class="row mt-4">
                        <div class="col-lg-12 text-center">
                            @if($store->status->name == 'Suspended')
                            <form action="{{ route('store_control_center.unsuspend_store', ['id' => $store->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-lg">Unsuspend</button>
                            </form>
                        @else
                            <form action="{{ route('store_control_center.suspend_store', ['id' => $store->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to suspend this store?');">Suspend</button>
                            </form>
                        @endif

                            {{--  <a href="{{ route('admin.suspend_store', ['id' => $store->id]) }}"
                               class="btn btn-danger btn-lg"
                               onclick="return confirm('Are you sure you want to suspend this store?');">
                               <i class="fa-solid fa-ban"></i> Suspend Store
                            </a>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flexbox container for equal height columns with margin -->
        <div  class="d-flex flex-wrap align-items-stretch ">

            <!-- Store Owner Info Section (Secondary) -->
            <div class="col-lg-4 me-2 mb-4"> <!-- Added me-4 for margin between sections -->
                <div class="card h-100"> <!-- h-100 ensures it stretches to full height -->
                    <div class="card-body profile-card pt-4 d-flex flex-column justify-content-center ">
                        <!-- Profile Image Column -->
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <img src="{{ $store_owner->image ? url('/user_images/' . $store_owner->image) : url('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle" width="150">
                        </div>
                        <h5 class="card-title">Store Owner Profile</h5>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-md-4 label">Full Name</div>
                            <div class="col-lg-8 col-md-8">{{ $store_owner->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-md-4 label">Email</div>
                            <div class="col-lg-8 col-md-8">{{ $store_owner->email }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-md-4 label">Rating</div>
                            <div class="col-lg-8 col-md-8">{{ $store_owner->storeOwner->rating ?? 'Not provided' }}</div>
                        </div>

                        <!-- Edit/Delete Store Owner -->
                        <div class="row mt-4">
                            <div class="col-lg-12 text-center">
                                <!-- Edit Button -->
                                <a href="{{ route('admin.edit_store_owner', ['id' => $store_owner->id]) }}" class="btn btn-primary btn-lg">
                                    <i class="fa-solid fa-pencil"></i> Edit
                                </a>
                                <!-- Delete Button -->
                                <form action="{{ route('admin.delete_store_owner', ['id' => $store_owner->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this store owner?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Store Sales History -->
            <div class="col-lg-7 mb-4"> <!-- Added mb-4 for margin at the bottom -->
                <div class="card h-100"> <!-- h-100 ensures it stretches to full height -->
                    <div class="card-body">
                        <h5 class="card-title">Sales History <span>| Recent</span></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Purchase Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($storePurchases as $purchase)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $purchase->product->name }}</td>
                                        <td>{{ $purchase->quantity_sold }}</td>
                                        <td>${{ $purchase->total_amount }}</td>
                                        <td>{{ \Carbon\Carbon::parse($purchase->sale_date)->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- Store Products -->
        <div class="col-lg-11">
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

    </div>
</section>

@endsection
