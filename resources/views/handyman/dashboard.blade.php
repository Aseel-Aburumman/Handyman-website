@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Dashboard</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('handyman.Home') }}">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="shape-mockup spin" data-bottom="0%" data-left="0%"><img src="{{ asset('assets/img/shape/lines_1.png') }}"
                alt="shape">
        </div>
        <div class="container">
            @if (session('success'))
                <div class="container alert alert-success">
                    {!! session('success') !!}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                        role="tab" aria-controls="description" aria-selected="true">Account Detail</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="false">My Gigs</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false">Awarded Gigs</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="skills-tab" data-bs-toggle="tab" href="#skills" role="tab"
                        aria-controls="skills" aria-selected="false">Skills</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="task-tab" data-bs-toggle="tab" href="#task" role="tab"
                        aria-controls="task" aria-selected="false">My Task</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders2-tab" data-bs-toggle="tab" href="#orders2" role="tab"
                        aria-controls="orders2" aria-selected="false">My Orders</a>
                </li>

                <li class="nav-item" role="presentation">
                    <form class="" action="{{ route('chat', ['receiverId' => $firstgigs->user->id]) }}"
                        method="GET">
                        @csrf
                        <button type="submit" class="nav-link th-btn ">Chat Center</button>
                    </form>
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
                        <form action="{{ route('handyman.dashboard.update') }}" method="POST" enctype="multipart/form-data"
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

                            <div class="d-flex">

                                <!-- Experience -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="experience">Experience</label>
                                    <input type="number" name="experience" id="experience" class="form-control"
                                        value="{{ $handyman->experience ?? '0 ' }}" required>
                                </div>

                                <!-- price_per_hour -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="price_per_hour">Price Per Hour</label>
                                    <input type="number" name="price_per_hour" id="price_per_hour" class="form-control"
                                        value="{{ $handyman->price_per_hour ?? ' ' }}" required>
                                </div>
                            </div>

                            <div>

                                <!-- BIO -->
                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <input type="text" name="bio" id="bio" class="form-control"
                                        value="{{ $handyman->bio ?? ' ' }}" required>
                                </div>

                            </div>
                            <!-- store_location -->
                            <div class="form-group">
                                <label for="store_location">Store Location</label>
                                <input type="text" name="store_location" id="store_location" class="form-control"
                                    value="{{ $handyman->store_location ?? ' ' }}" required>
                            </div>


                            <button type="submit" class="th-btn">Save Changes</button>

                            {{--  <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id]) }}"
                                class="mt-3 th-btn">View As
                                Client</a>  --}}

                        </form>
                    </div>
                </div>

                <!-- orders Details Tab -->
                <div class="tab-pane fade  " id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    @foreach ($awardedgig as $gig)
                        <div class="content-box gigs-approval">

                            <div class="d-flex justify-content-between gig-details">
                                <div class="w-75">
                                    <h6>Task Details</h6>
                                    <div class="d-flex justify-content-between">
                                        <h2 class="gig-title">{{ $gig->title }}</h2>
                                    </div>
                                    <p class="gig-description">
                                        {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                        {{ $gig->location }}</p>
                                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                        {{ $gig->task_date }} {{ $gig->task_time }}</p>
                                </div>
                                <div class="w-25 text-center align-self-center align-items-center">
                                    <h3>Client Details</h3>
                                    <div class="m-auto freelancer-img">
                                        @if ($gig->user && $gig->user->image)
                                            <img src="{{ asset('storage/profile_images/' . $gig->user->image) }}"
                                                alt="{{ $gig->user->name }} Picture">
                                        @else
                                            <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                alt="Freelancer Picture">
                                        @endif
                                    </div>
                                    <h6 class="freelancer-name">
                                        {{ $gig->user->name ?? 'Unknown User' }}</h6>
                                    <div class="justify-content-center handyman-rating">
                                        <span class="text-center rating-star">★</span>
                                        <span>{{ $gig->user->rating }}
                                            ({{ $gig->user->clientreviews->count() }} reviews)
                                        </span>
                                    </div>

                                    <!-- Display Gigs Count -->
                                    <div class="gig-count">
                                        <p><strong>Gigs Posted:</strong> {{ $gig->user->gigs->count() }}</p>
                                    </div>

                                    <form class="mt-3" action="{{ route('chat', ['receiverId' => $gig->user->id]) }}"
                                        method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-info w-100 ">Chat and Figure what
                                            next!</button>
                                    </form>
                                    <form class="mt-3 ml-2"
                                        action="{{ route('handyman.accept', ['gigId' => $gig->id]) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        {{--  <input type="hidden" name="category_id" value="{{ $proposal->id }}">  --}}
                                        <button type="submit" class="btn btn-success ml-2 w-100 ">Accept and Start The
                                            Work</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- My Tasks Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    @foreach ($mygigs as $gig)
                        <div class="content-box gigs-approval">

                            <div class="d-flex justify-content-between gig-details">
                                <div class="w-75">
                                    <h6>Task Details

                                    </h6>
                                    <div class="d-flex justify-content-between">
                                        <h2 class="gig-title">{{ $gig->title }}</h2>
                                    </div>
                                    <p class="gig-description">
                                        {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                        {{ $gig->location }}</p>
                                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                        {{ $gig->task_date }} {{ $gig->task_time }}</p>
                                </div>
                                <div class="w-25 text-center align-self-center align-items-center">
                                    @if ($gig->status_id == 7)
                                        <button class="w-100   btn  btn-info">{{ $gig->status->name }}</button>
                                    @elseif($gig->status_id == 8)
                                        <button class="w-100 btn  btn-primary">{{ $gig->status->name }}</button>
                                    @elseif($gig->status_id == 9)
                                        <button class="w-100 btn btn-success">{{ $gig->status->name }}</button>
                                    @elseif($gig->status_id == 10)
                                        <button class="w-100 btn btn-danger">{{ $gig->status->name }}</button>
                                    @elseif($gig->status_id == 11)
                                        <button class="w-100 btn btn-warning">{{ $gig->status->name }}</button>
                                    @elseif($gig->status_id == 28)
                                        <button class="w-100 btn btn-warning">{{ $gig->status->name }}</button>
                                    @endif
                                    <h3>Client Details</h3>
                                    <div class="m-auto freelancer-img">
                                        @if ($gig->user && $gig->user->image)
                                            <img src="{{ asset('storage/profile_images/' . $gig->user->image) }}"
                                                alt="{{ $gig->user->name }} Picture">
                                        @else
                                            <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                alt="Freelancer Picture">
                                        @endif
                                    </div>
                                    <h6 class="freelancer-name">
                                        {{ $gig->user->name ?? 'Unknown User' }}</h6>
                                    <div class="justify-content-center handyman-rating">
                                        <span class="text-center rating-star">★</span>
                                        <span>{{ $gig->user->rating }}
                                            ({{ $gig->user->clientreviews->count() }} reviews)
                                        </span>
                                    </div>

                                    <!-- Display Gigs Count -->
                                    <div class="gig-count">
                                        <p><strong>Gigs Posted:</strong> {{ $gig->user->gigs->count() }}</p>
                                    </div>

                                    <form class="mt-3" action="{{ route('chat', ['receiverId' => $gig->user->id]) }}"
                                        method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-info w-100 ">Chat and Figure what
                                            next!</button>
                                    </form>
                                    <form class="mt-3 ml-2"
                                        action="{{ route('handyman.assigned.task', ['gigId' => $gig->id]) }}"
                                        method="GET">
                                        @csrf
                                        {{--  <input type="hidden" name="category_id" value="{{ $proposal->id }}">  --}}
                                        <button type="submit" class="btn btn-success ml-2 w-100 ">View Task</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- My skills Tab -->
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">

                    <!-- Add New Skill Button -->
                    <button id="toggleAddSkillForm" class="mb-5 w-100 th-btn ">Add a New Skill</button>

                    <!-- Add Skill Form (Initially Hidden) -->
                    <div id="addSkillForm" style="display: none;" class="mt-3">
                        <form action="{{ route('handyman.addSkill') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Select Skill from Dropdown -->
                            <div class="form-group">
                                <label for="skill_id">Select Skill:</label>
                                <select name="skill_id" class="form-control" required>
                                    <option value="" disabled selected>Select a skill</option>
                                    @foreach ($skills as $skill)
                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Upload Skill Proof Image -->
                            <div class="form-group">
                                <label for="certificate_image">Upload Skill Certificate (Image):</label>
                                <input type="file" name="certificate_image" class="form-control" required>
                            </div>

                            <!-- Description for the Certificate -->
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control" rows="3" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success">Add Skill</button>
                        </form>
                    </div>

                    <div class="woocommerce-Reviews">

                        <div class="th-comments-wrap">

                            <ul class="comment-list" style="max-height: 400px; overflow-y: auto;">
                                @foreach ($handyman->skillCertificates as $certificate)
                                    <li class="review th-comment-item">
                                        <div class="th-post-comment">
                                            <i class="skillIcon w-25 fa-solid fa-toolbox fa-2xl" style=""></i>
                                            <div class="mt-1 w-75 comment-content">
                                                <!-- Skill Name and Description -->
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="name">{{ $certificate->skill->name }}</h4>
                                                    @if ($certificate->status_id == 3)
                                                        <button
                                                            class="statusBtn1 custom-btn-info">{{ $certificate->status->name }}</button>
                                                    @elseif($certificate->status_id == 2)
                                                        <button
                                                            class="statusBtn1 custom-btn-warning">{{ $certificate->status->name }}</button>
                                                    @elseif($certificate->status_id == 1)
                                                        <button
                                                            class="statusBtn1 custom-btn-success">{{ $certificate->status->name }}</button>
                                                    @endif
                                                </div>
                                                <p><strong>Description: </strong>{{ $certificate->skill->description }}</p>


                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- orders Details Tab -->
                <div class="tab-pane fade  " id="orders2" role="tabpanel" aria-labelledby="orders2-tab">
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
                <div class="tab-pane fade" id="task" role="tabpanel" aria-labelledby="task-tab">
                    @foreach ($gigs_i_created as $gig)
                        <div class="gig-card">
                            <div class="gig-card-content">
                                <!-- Left Side: Gig Details -->
                                <div class="gig-details">
                                    <h3>Task Details
                                        @if ($gig->status_id == 7)
                                            <button class="statusBtn btn  btn-info">{{ $gig->status->name }}</button>
                                        @elseif($gig->status_id == 8)
                                            <button class="statusBtn btn  btn-primary">{{ $gig->status->name }}</button>
                                        @elseif($gig->status_id == 9)
                                            <button class="statusBtn btn btn-success">{{ $gig->status->name }}</button>
                                        @elseif($gig->status_id == 10)
                                            <button class="statusBtn btn btn-danger">{{ $gig->status->name }}</button>
                                        @elseif($gig->status_id == 11)
                                            <button class="statusBtn btn btn-warning">{{ $gig->status->name }}</button>
                                        @elseif($gig->status_id == 28)
                                            <button class="statusBtn btn btn-warning">{{ $gig->status->name }}</button>
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

                                        <p class="gig-price"><a href="{{ route('Onegig', ['gigId' => $gig->id]) }}">View
                                                The Task
                                                Proposals</a></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

            <!-- JavaScript to Toggle the Form -->
            <script>
                document.getElementById('toggleAddSkillForm').addEventListener('click', function() {
                    var form = document.getElementById('addSkillForm');
                    form.style.display = form.style.display === 'none' ? 'block' : 'none';
                });
            </script>



        </div>


        </div>
        </div>
    </section>

    <style>
        .content-box {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .skillIcon {
            color: #f47629;
            align-self: center;
            justify-self: center;
            text-align: center;
            font-size: 5rem;
        }

        .product-tab-style1 {
            gap: 7px;
        }
    </style>
@endsection
