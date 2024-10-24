@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Dashboard</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('customer.Home') }}">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                        role="tab" aria-controls="description" aria-selected="true">Account Detail</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="false">My Task</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false">My Orders</a>
                </li>

                <li class="nav-item" role="presentation">
                    {{-- <form class="" action="{{ route('chat', ['receiverId' => $firstgigs->handyman->user->id]) }}"
                        method="GET">
                        @csrf
                        <button type="submit" class="nav-link th-btn ">Chat Center</button>
                    </form> --}}
                    {{--  <a class="nav-link th-btn" id="chat-tab" data-bs-toggle="tab"
                        href="{{ route('chat', ['receiverId' => $firstgigs->handyman->user->id]) }}" role="tab"
                        aria-controls="chats" aria-selected="false">Chat Center</a>  --}}
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">
                <!-- Account Details Tab -->
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="profile-edit-wrapper">
                        <h2>Edit Profile</h2>
                        <form action="{{ route('storeowner.dashboard.update') }}" method="POST" enctype="multipart/form-data"
                            class="profile-edit-form">
                            @csrf
                            {{--  @method('POST')  --}}

                            <!-- Profile Image -->
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    @if ($user->image)
                                        <img src="{{ asset('storage/profile_images/' . $user->image) }}"
                                            alt="Profile Picture">
                                    @else
                                        <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                            alt="Default Profile Picture">
                                    @endif
                                </div>
                                <label for="image">Upload Profile Picture</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <!-- Name -->
                            <div class="d-flex justify-content-between">

                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $user->name }}" required>
                                </div>

                                <!-- Email -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $user->email }}" required>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                                <!-- Phone -->
                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ $user->delivery_info->phone ?? ' ' }}" required>
                                </div>
                                <!-- building_no -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="building_no">Building no</label>
                                    <input type="text" name="building_no" id="building_no" class="ml-2 form-control"
                                        value="{{ $user->delivery_info->building_no ?? ' ' }}" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- City -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        value="{{ $user->delivery_info->city ?? ' ' }}" required>
                                </div>

                                <!-- Location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" id="location" class="form-control"
                                        value="{{ $user->delivery_info->location ?? ' ' }}" required>
                                </div>
                            </div>


                            <h6 class="mb-0">Store Detail Profile</h6>
                            <hr>
                            <div class="d-flex">

                                <!-- store_name -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="store_name">Store Name (En)</label>
                                    <input type="text" name="store_name" id="store_name" class="form-control"
                                        value="{{ $storeowner->store_name ?? '0 ' }}" required>
                                </div>

                                <!-- store_name_ar -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="store_name_ar">Store Name (Ar)</label>
                                    <input type="text" name="store_name_ar" id="store_name_ar" class="form-control"
                                        value="{{ $storeowner->store_name_ar ?? ' ' }}" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- contact_number -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" name="contact_number" id="contact_number" class="form-control"
                                        value="{{ $storeowner->contact_number ?? '0 ' }}" required>
                                </div>

                                <!-- location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location_sotre">Store Location</label>
                                    <input type="text" name="location_sotre" id="location_sotre" class="form-control"
                                        value="{{ $store->location ?? ' ' }}" required>
                                </div>
                            </div>

<div class="d-flex">

                                <!-- address_ar -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="address_ar">Address (Ar)</label>
                                    <input type="text" name="address_ar" id="address_ar" class="form-control"
                                        value="{{ $storeowner->address_ar ?? '0 ' }}" required>
                                </div>

                                <!-- address -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="address">Address (En)</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="{{ $storeowner->address ?? ' ' }}" required>
                                </div>
                            </div>


                            <!-- description -->
                            <div class="form-group mb-0">
                                    <label for="description">Description (En)</label>
                                    <input type="text" name="description" id="description" class="form-control"
                                        value="{{ $store->description ?? ' ' }}" required>
                            </div>
                            <!-- description ar -->
                            <div class="form-group">
                                    <label for="description_ar">Description (Ar)</label>
                                    <input type="text" name="description_ar" id="description_ar" class="form-control"
                                        value="{{ $store->description_ar ?? ' ' }}" required>
                            </div>



                            <button type="submit" class="th-btn">Save Changes</button>

                            {{--  <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id]) }}"
                                class="mt-3 th-btn">View As
                                Client</a>  --}}

                        </form>
                    </div>
                </div>
                <!-- orders Details Tab -->
                <div class="tab-pane fade show " id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    {{--  <div class="profile-edit-wrapper">  --}}
                    <h1>Your Sales Records</h1>
                    @if ($sales->isEmpty())
                        <p>No sales records found.</p>
                    @else
                        @foreach ($sales as $saleDate => $saleGroup)
                            @php
                                // Calculate the total amount for all items in this group (all items in the card)
                                $groupTotal = $saleGroup->sum('total_amount');
                                // Get the store name from the first sale in the group (assuming all have the same store)
                                $storeName = $saleGroup->first()->store->name;
                            @endphp

                            <!-- Card -->
                            <div class="card mb-4 shadow-sm">
                                <div class="d-flex justify-content-between card-header">
                                    <h4 class="my-0 font-weight-normal">
                                        Order from {{ $storeName }} on
                                        {{ \Carbon\Carbon::parse($saleDate)->format('F j, Y g:i A') }}
                                    </h4>
                                    <span class="custom-total">
                                        Total: JD {{ number_format($groupTotal, 2) }}
                                    </span>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        @foreach ($saleGroup as $sale)
                                            <li
                                                class="p-0 mt-1   list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <!-- Compact product details -->
                                                    <strong>Product:</strong> {{ $sale->product->name }}
                                                    <span class="text-muted">(ID: {{ $sale->product_id }})</span> -
                                                    <strong>Quantity:</strong> {{ $sale->quantity_sold }} -
                                                    <strong>Total:</strong> JD {{ number_format($sale->total_amount, 2) }}
                                                </div>
                                                <div class="custom-status">
                                                    @if ($sale->status_id == 16)
                                                        <button
                                                            class="statusBtn1 custom-btn-info">{{ $sale->status->name }}</button>
                                                    @elseif($sale->status_id == 17)
                                                        <button
                                                            class="statusBtn1 custom-btn-primary">{{ $sale->status->name }}</button>
                                                    @elseif($sale->status_id == 18)
                                                        <button
                                                            class="statusBtn1 custom-btn-success">{{ $sale->status->name }}</button>
                                                    @elseif($sale->status_id == 19)
                                                        <button
                                                            class="statusBtn1 custom-btn-danger">{{ $sale->status->name }}</button>
                                                    @endif

                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{--  </div>  --}}
                </div>

                <!-- My Tasks Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        @foreach ($gigs as $gig)
                            <div class="gig-card">
                                <div class="gig-card-content">
                                    <!-- Left Side: Gig Details -->
                                    <div class="gig-details">
                                        <h3>Task Details
                                            @if ($gig->status_id == 7)
                                                <button class="statusBtn btn  btn-info">{{ $gig->status->name }}</button>
                                            @elseif($gig->status_id == 8)
                                                <button
                                                    class="statusBtn btn  btn-primary">{{ $gig->status->name }}</button>
                                            @elseif($gig->status_id == 9)
                                                <button
                                                    class="statusBtn btn btn-success">{{ $gig->status->name }}</button>
                                            @elseif($gig->status_id == 10)
                                                <button class="statusBtn btn btn-danger">{{ $gig->status->name }}</button>
                                            @elseif($gig->status_id == 11)
                                                <button
                                                    class="statusBtn btn btn-warning">{{ $gig->status->name }}</button>
                                            @elseif($gig->status_id == 28)
                                                <button
                                                    class="statusBtn btn btn-warning">{{ $gig->status->name }}</button>
                                            @endif
                                        </h3>

                                        <h2 class="gig-title">{{ $gig->title }}</h2>
                                        <p class="gig-description">
                                            {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                                        <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                            {{ $gig->location }}</p>
                                        <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                            {{ $gig->task_date }} {{ $gig->task_time }}</p>
                                        @if ($gig->handyman)
                                            <p class="gig-total">Total: JD {{ $gig->total }}</p>
                                        @else
                                            <p class="gig-total">Estimated Total: JD {{ $gig->total }}</p>
                                        @endif
                                    </div>

                                    <!-- Right Side: Freelancer Info -->
                                    <div class="freelancer-info">
                                        <h3>Awarded Handyman</h3>
                                        @if ($gig->handyman)
                                            <div class="freelancer-img">
                                                @if ($gig->handyman && $gig->handyman->user->image)
                                                    <img src="{{ asset('storage/profile_images/' . $gig->handyman->user->image) }}"
                                                        alt="{{ $gig->handyman->name }} Picture">
                                                @else
                                                    <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                        alt="Freelancer Picture">
                                                @endif
                                            </div>
                                            <h3 class="freelancer-name">
                                                {{ $gig->handyman->user->name ?? 'Unknown Handyman' }}</h3>
                                            <p class="gig-price">Price: JD {{ $gig->price }}/ per hour</p>
                                            <p class="gig-price"><a
                                                    href="{{ route('assigned.task', ['gigId' => $gig->id]) }}">Veiw Task
                                                    Detail</a></p>
                                        @else
                                            <div>
                                                No awarded handyman yet, check out your task proposals.
                                            </div>

                                            <p class="gig-price"><a
                                                    href="{{ route('Onegig', ['gigId' => $gig->id]) }}">View The Task
                                                    Proposals</a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
