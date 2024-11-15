@extends('layouts.admin_master')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item ">User Control Center</li>
                <li class="breadcrumb-item ">List of Store Owners</li>
                <li class="breadcrumb-item active">Store Owner info edit</li>
            </ol>
        </nav>
    </div>

    {{--  <!-- End Page Title -->  --}}

    <section class="section dashboard">
        <div class="row">




            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body profile-card pt-4">

                        <div class="row w-100">
                            <!-- Profile Image Column -->
                            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                <img src="{{ $store_owner->image ? url('/user_images/' . $store_owner->image) : url('assets/img/profile-img.jpg') }}"
                                    alt="Profile" class="rounded-circle" width="150">
                            </div>

                            <!-- Profile Information Column -->
                            <div class="col-lg-8">
                                <h2>{{ $store_owner->name }}</h2>

                                <div class="tab-content pt-2">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Profile Details</h5>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Full Name</div>
                                            <div class="col-lg-8 col-md-8">{{ $store_owner->name }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Address</div>
                                            <div class="col-lg-8 col-md-8">
                                                {{ $deliveryInfo->building_no ?? 'Not provided' }},
                                                {{ $deliveryInfo->location ?? 'Not provided' }},
                                                {{ $deliveryInfo->city ?? 'Not provided' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Phone</div>
                                            <div class="col-lg-8 col-md-8">{{ $deliveryInfo->phone ?? 'Not provided' }}
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Email</div>
                                            <div class="col-lg-8 col-md-8">{{ $store_owner->email }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Rating</div>
                                            <div class="col-lg-8 col-md-8">
                                                {{ $store_owner->storeOwner->rating ?? 'Not provided' }}</div>
                                        </div>

                                        <h5 class="card-title">Store Details</h5>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Store Name</div>
                                            <div class="col-lg-8 col-md-8">{{ $store->name ?? 'Not provided' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Contact Number</div>
                                            <div class="col-lg-8 col-md-8">
                                                {{ $store_owner->storeOwner->contact_number ?? 'Not provided' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Address</div>
                                            <div class="col-lg-8 col-md-8">{{ $store->location ?? 'Not provided' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Certificate Id</div>
                                            <div class="col-lg-8 col-md-8">
                                                {{ $store_owner->storeOwner->certificate_id ?? 'Not provided' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Description</div>
                                            <div class="col-lg-8 col-md-8">{{ $store->description ?? 'Not provided' }}
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Status</div>
                                            <div class="col-lg-8 col-md-8">{{ $store->status_id ?? 'Not provided' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Store Rating</div>
                                            <div class="col-lg-8 col-md-8">{{ $store->rating ?? 'Not provided' }}</div>
                                        </div>

                                        <!-- Stylish Button for Chat Center, Edit, and Delete -->
                                        <div class="row mt-4">
                                            <div class="col-lg-12 text-center">
                                                <!-- Go to Chat Center Button -->
                                                <a href="{{ route('chatadmin2', ['receiverId' => $store_owner->id]) }}"
                                                    class="btn btn-primary btn-lg">
                                                    <i class="bi bi-chat-dots"></i> Go to Chat Center
                                                </a>

                                                <!-- Edit Button -->
                                                <a href="{{ route('admin.edit_store_owner', ['id' => $store_owner->id]) }}"
                                                    class="btn btn-primary btn-lg">
                                                    <i class="fa-solid fa-pencil"></i> Edit
                                                </a>

                                                <!-- Delete Button -->
                                                <form
                                                    action="{{ route('admin.delete_store_owner', ['id' => $store_owner->id]) }}"
                                                    method="POST" style="display:inline;"
                                                    onsubmit="return confirm('Are you sure you want to delete this store owner?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary btn-lg">
                                                        <i class="fa-solid fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Stylish Button -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-6">
                <div class="card recent-sales overflow-auto">
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
                                @foreach ($storePurchases as $purchase)
                                    <tr>
                                        <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                                        <td><a href="#" class="text-primary">{{ $purchase->product->name }}</a></td>
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
            <div class="col-6">
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
                                @foreach ($store->products as $product)
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
