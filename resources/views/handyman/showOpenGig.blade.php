@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Task Detail</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('customer.Home') }}">Dashboard</a></li>
                    <li>Task Detail</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="pb-0 overflow-hidden space" id="service-sec">

        @if (session('success'))
            <div class="container alert alert-success">
                {!! session('success') !!}
            </div>
        @endif

        <div class="shape-mockup spin" data-bottom="0%" data-left="0%"><img
                src="{{ asset('assets/img/shape/lines_1.png') }}" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="{{ asset('assets/img/theme-img/title_icon.svg') }}"
                                alt="Icon">Lets Get it Done</span>
                        <h2 class="sec-title">Check all the proposal you got </h2>


                        <p class="sec-text">Write your proposal thoroughly, including your services , the
                            timeline you estimate for the job. If it</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class=" pt-0 container d-flex overflow-hidden space" id="service-sec">




        <div class="container d-flex flex-column task-gig-card1">

            <div class=" task-gig-card ">
                <div class="gig-details">
                    <h3>Task Details</h3>
                    <div class="d-flex justify-content-between">
                        <h2 class="gig-title">{{ $gig->title }}</h2>
                        <p class="gig-total">Budget: JD {{ $gig->total }}/per hour</p>
                    </div>
                    <p class="gig-description">
                        {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                        {{ $gig->location }}</p>
                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                        {{ $gig->task_date }} {{ $gig->task_time }}</p>
                </div>

            </div>
            <h4>Your Proposal</h4>
            @if (!$existingProposal)
                <form class=" formProposal " action="{{ route('handyman.submitProposal', $gig->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="proposal">Proposal</label>
                        <textarea name="proposal" id="proposal" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price_per_hour">Price Per Hour</label>
                        <input type="number" name="price_per_hour" id="price_per_hour" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="total_time">Total Time (hours)</label>
                        <input type="number" name="total_time" id="total_time" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Proposal</button>
                </form>
            @else
                <p>How the client see your proposal </p>
                <div style="display: block;" id="currentProposalForm" class=" handyman-card filter-step2-handyman-card">
                    <div class="handyman-profile-gig-section">
                        <div class="handyman-pic-section-gig">
                            <div class="handyman-thepic-gig-view-section">
                                @if ($existingProposal->handyman->user && $existingProposal->handyman->user->image)
                                    <img src="{{ asset('storage/profile_images/' . $existingProposal->handyman->user->image) }}"
                                        alt="{{ $existingProposal->handyman->user->name }}" class="handyman-profile-img">
                                @else
                                    <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                        alt="{{ $existingProposal->handyman->user->name }}" class="handyman-profile-img">
                                @endif
                            </div>
                            <div class="handyman-details-gig">

                                <div class="d-flex justify-content-between ">
                                    <h4>{{ $existingProposal->handyman->user->name }}</h4>

                                    <div class=" handyman-tasks">
                                        <span><i class="fa-solid fa-check-double"></i> Done
                                            {{ $existingProposal->handyman->gigs_count }} tasks</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between ">
                                    <div class="handyman-rating">
                                        <span class="rating-star">★</span>
                                        <span>{{ $existingProposal->handyman->user->rating }}
                                            ({{ $existingProposal->handyman->user->reviews_count }} reviews)
                                        </span>
                                    </div>
                                    <div class="handyman-price mt-1">
                                        JD{{ number_format($existingProposal->price_per_hour, 2) }}/hr</div>
                                </div>




                            </div>

                        </div>

                        <div class="handyman-description-gig">
                            <div class="handyman-description">
                                <p class="mb-0">Handyman Description:</p>
                                <p class="mb-0">{{ Str::limit($existingProposal->handyman->bio, 200) }}</p>
                                <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $existingProposal->handyman->id]) }}"
                                    class="read-more-link">Read More</a>
                            </div>

                        </div>
                        <div class="handyman-description-gig">
                            <div class="handyman-description">
                                <h6>How I can help:</h6>
                                <p>{{ Str::limit($existingProposal->proposal, 200) }}</p>
                            </div>

                        </div>

                        <!-- Edit Proposal Button -->
                        <button class="mt-3 th-btn btn btn-warning" id="editProposalBtn">
                            Edit Proposal
                        </button>

                    </div>
                </div>


                <!-- Edit Proposal Form (Initially Hidden) -->
                <form class="w-100 handyman-card filter-step2-handyman-card" id="editProposalForm"
                    action="{{ route('handyman.updateProposal', $existingProposal->id) }}" method="POST"
                    style="display: none;">
                    @csrf

                    <div class="form-group">
                        <label for="proposal">Proposal</label>
                        <textarea name="proposal" id="proposal" class="form-control" rows="5" required>{{ $existingProposal->proposal }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="price_per_hour">Price Per Hour</label>
                        <input type="number" name="price_per_hour" id="price_per_hour" class="form-control"
                            value="{{ $existingProposal->price_per_hour }}" required>
                    </div>

                    <div class="form-group">
                        <label for="total_time">Total Time (hours)</label>
                        <input type="number" name="total_time" id="total_time" class="form-control"
                            value="{{ $existingProposal->time }}" required>
                    </div>

                    <button type="submit" class="th-btn btn btn-primary">Update Proposal</button>
                </form>
            @endif
        </div>
        <script>
            document.getElementById('editProposalBtn').addEventListener('click', function() {
                document.getElementById('editProposalForm').style.display = 'block'; // Show the form
                this.style.display = 'none'; // Hide the "Edit Proposal" button
                document.getElementById('currentProposalForm').style.display = 'none'; // Show the form

            });
        </script>
        <!-- Handyman List -->
        <div class="task-handyman-card ">

            <!-- Handymen Loop -->
            <div class=" handyman-card filter-step2-handyman-card">
                <div class="handyman-profile-gig-section">
                    <div class="handyman-pic-section-gig">
                        <div class="handyman-thepic-gig-view-section">
                            @if ($gig->user && $gig->user->image)
                                <img src="{{ asset('storage/profile_images/' . $gig->user->image) }}"
                                    alt="{{ $gig->user->name }}" class="handyman-profile-img">
                            @else
                                <img src="{{ asset('assets/img/team/team_1_1.jpg') }}" alt="{{ $gig->user->name }}"
                                    class="handyman-profile-img">
                            @endif
                        </div>
                        <div class="handyman-details-gig">

                            <div class="d-flex justify-content-between ">
                                <h4>{{ $gig->user->name }}</h4>

                                <div class=" handyman-tasks">
                                    <span><i class="fa-solid fa-check-double"></i> Done
                                        {{ $gig->gigs_count }} tasks</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <div class="handyman-rating">
                                    <span class="rating-star">★</span>
                                    <span>{{ $gig->user->rating }}
                                        ({{ $gig->user->clientreviews }} reviews)
                                    </span>
                                </div>
                                <div class="handyman-price mt-1">
                                    JD{{ number_format($gig->price, 2) }}/hr</div>
                            </div>



                            <div class="d-flex justify-content-end">
                                <!-- Report Button -->
                                <button class="btn btn-danger report-btn mr-3 " data-handyman-id="{{ $gig->user->id }}"
                                    data-gig-id="{{ $gig->id }}">
                                    Report Client Gig
                                </button>

                            </div>
                        </div>

                    </div>





                </div>
            </div>
            <div class=" handyman-card filter-step2-handyman-card">
                <h6>Tips </h6>
                - When creating your proposal, be sure to clearly outline all the services you're offering, the timeline for
                completing the job, and any important details related to the work.<br>
                - This will help set the right expectations
                from the start. Be open to discussing the proposal with the client to ensure it aligns with their needs.
                <br>- If
                they request adjustments or have questions, take the time to review and refine the details together to reach
                a mutual agreement. <br>- Clear communication will increase your chances of being hired. Lastly, don’t
                forget
                to
                highlight any areas where you provide extra value or can offer a tip for maintaining long-term success with
                your clients!
            </div>
        </div>
    </section>

    <style>
        .formProposal {
            justify-content: space-between;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .task-gig-card1 {
            flex: 60%;
        }

        .task-handyman-card {
            flex: 40%;

        }
    </style>
@endsection