@extends('layouts.admin_master')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item ">User Control Center</li>
                <li class="breadcrumb-item ">List of Handymans</li>
                <li class="breadcrumb-item active">Handyman info edit</li>
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
                                <img src="{{ $handyman->image ? url('/user_images/' . $handyman->image) : url('assets/img/profile-img.jpg') }}"
                                    alt="Profile" class="rounded-circle" width="150">
                            </div>

                            <!-- Profile Information Column -->
                            <div class="col-lg-8">
                                <h2>{{ $handyman->name }}</h2>

                                <div class="tab-content pt-2">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Profile Details</h5>

                                        <!-- User Details -->
                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Full Name</div>
                                            <div class="col-lg-8 col-md-8">{{ $handyman->name }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Email</div>
                                            <div class="col-lg-8 col-md-8">{{ $handyman->email }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Phone</div>
                                            <div class="col-lg-8 col-md-8">{{ $deliveryInfo->phone ?? 'Not provided' }}
                                            </div>
                                        </div>

                                        <!-- Handyman Details -->
                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Experience</div>
                                            <div class="col-lg-8 col-md-8">
                                                {{ $handyman->handyman->experience ?? 'Not provided' }} years</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Bio</div>
                                            <div class="col-lg-8 col-md-8">{{ $handyman->handyman->bio ?? 'Not provided' }}
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Store Location</div>
                                            <div class="col-lg-8 col-md-8">
                                                {{ $handyman->handyman->store_location ?? 'Not provided' }}</div>
                                        </div>

                                        <!-- Delivery Info Details -->
                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">Address</div>
                                            <div class="col-lg-8 col-md-8">{{ $deliveryInfo->location ?? 'Not provided' }},
                                                {{ $deliveryInfo->building_no ?? '' }}</div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-4 col-md-4 label">City</div>
                                            <div class="col-lg-8 col-md-8">{{ $deliveryInfo->city ?? 'Not provided' }}
                                            </div>
                                        </div>

                                        <!-- Stylish Button for Chat Center, Edit, and Delete -->
                                        <div class="row mt-4">
                                            <div class="col-lg-12 text-center">
                                                <!-- Go to Chat Center Button -->
                                                <a href="{{ route('chatadmin2', ['receiverId' => $handyman->id]) }}"
                                                    class="btn btn-primary btn-lg">
                                                    <i class="bi bi-chat-dots"></i> Go to Chat Center
                                                </a>

                                                <!-- Edit Button -->
                                                <a href="{{ route('admin.edit_handyman', ['id' => $handyman->id]) }}"
                                                    class="btn btn-primary btn-lg">
                                                    <i class="fa-solid fa-pencil"></i> Edit
                                                </a>

                                                <!-- Delete Button -->
                                                <form
                                                    action="{{ route('admin.delete_handyman', ['id' => $handyman->id]) }}"
                                                    method="POST" style="display:inline;"
                                                    onsubmit="return confirm('Are you sure you want to delete this handyman?');">
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
                        <h5 class="card-title">Purchase History <span>| Recent</span></h5>

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
                                @foreach ($handyman->purchases as $purchase)
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
                        <h5 class="card-title">Gig History <span>| Recent</span></h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Estimated Time</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($handyman->handyman->gigs as $gig)
                                    <!-- Display gig information here -->
                                    <tr>
                                        <td>{{ $gig->title }}</td>
                                        <td>{{ $gig->description }}</td>
                                        <td>{{ $gig->location }}</td>
                                        <td>{{ $gig->estimated_time }} hours</td>
                                        <td>${{ $gig->price }}</td>
                                        <td>{{ $gig->status->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($gig->created_at)->format('Y-m-d') }}</td>
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
