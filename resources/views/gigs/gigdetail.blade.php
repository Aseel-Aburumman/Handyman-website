@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.TaskDetail') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li><a href="{{ route('customer.Home') }}">{{ __('messages.Dashboard') }}
                        </a></li>
                    <li>{{ __('messages.TaskDetail') }}
                    </li>
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
                                alt="Icon">{{ __('messages.LetGetDone') }}
                        </span>
                        <h2 class="sec-title">{{ __('messages.allproposal') }}
                        </h2>


                        <p class="sec-text">{{ __('messages.allproposalP') }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class=" pt-0 container d-flex overflow-hidden space" id="service-sec">




        <div class="container d-flex flex-column task-gig-card1">

            {{--  <div class="step2Form">  --}}
            <div class=" task-gig-card ">
                <div class="gig-details">
                    <h3>{{ __('messages.TaskDetail') }}
                    </h3>
                    <div class="d-flex justify-content-between">
                        <h2 class="gig-title">{{ $gig->title }}</h2>
                        <p class="gig-total">{{ __('messages.Budget') }}
                            : {{ __('messages.JD') }}
                            {{ $gig->total }}/{{ __('messages.perhour') }}
                        </p>
                    </div>
                    <p class="gig-description">
                        {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                        {{ $gig->location }}</p>
                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                        {{ $gig->task_date }} {{ $gig->task_time }}</p>
                </div>

            </div>
            <h4>Rejected Proposal</h4>

            @foreach ($proposals as $proposal)
                @if ($proposal->status_id == 21)
                    <div class=" handyman-card filter-step2-handyman-card">
                        <div class="handyman-profile-gig-section">
                            <div class="handyman-pic-section-gig">
                                <div class="handyman-thepic-gig-view-section">
                                    @if ($proposal->handyman->user && $proposal->handyman->user->image)
                                        <img src="{{ asset('storage/profile_images/' . $proposal->handyman->user->image) }}"
                                            alt="{{ $proposal->handyman->user->name }}" class="handyman-profile-img">
                                    @else
                                        <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                            alt="{{ $proposal->handyman->user->name }}" class="handyman-profile-img">
                                    @endif
                                </div>
                                <div class="handyman-details-gig">

                                    <div class="d-flex justify-content-between ">
                                        <div>{{ $proposal->handyman->user->name }}</div>

                                        <div class=" handyman-tasks">
                                            <span><i class="fa-solid fa-check-double"></i> {{ __('messages.Done') }}
                                                {{ $proposal->handyman->gigs_count }} {{ __('messages.tasks') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <div class="handyman-rating">
                                            <span class="rating-star">★</span>
                                            <span>{{ $proposal->handyman->user->rating }}
                                                ({{ $proposal->handyman->user->reviews_count }}
                                                {{ __('messages.reviews') }})
                                            </span>
                                        </div>
                                        <div class="handyman-price mt-1">{{ __('messages.JD') }}
                                            {{ number_format($proposal->price_per_hour, 2) }}/{{ __('messages.hr') }}
                                        </div>
                                    </div>



                                    <div class="d-flex justify-content-between">
                                        <!-- Report Button -->
                                        <button class="btn btn-danger report-btn "
                                            data-handyman-id="{{ $proposal->handyman->id }}"
                                            data-gig-id="{{ $gig->id }}">
                                            Report Handyman
                                        </button>
                                        <!-- Reject Button -->
                                        <form class="ml-2"
                                            action="{{ route('proposal.unreject', ['proposalId' => $proposal->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-light ">{{ __('messages.UnReject') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="handyman-description-gig">
                                <div class="handyman-description">
                                    <p class="mb-0">{{ __('messages.HandymanDescription') }}
                                        :</p>
                                    <p class="mb-0">{{ Str::limit($proposal->handyman->bio, 200) }}</p>
                                    <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $proposal->handyman->id]) }}"
                                        class="read-more-link">{{ __('messages.ReadMore') }}</a>
                                </div>

                            </div>
                            <div class="handyman-description-gig">
                                <div class="handyman-description">
                                    <h6>{{ __('messages.Howhelp') }}
                                        :</h6>
                                    <p>{{ Str::limit($proposal->proposal, 200) }}</p>
                                </div>

                            </div>


                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="">
        </div>
        <!-- Handyman List -->
        <div class="task-handyman-card ">

            <!-- Handymen Loop -->
            @foreach ($proposals as $proposal)
                @if ($proposal->status_id == 23)
                    <div class=" handyman-card filter-step2-handyman-card">
                        <div class="handyman-profile-gig-section">
                            <div class="handyman-pic-section-gig">
                                <div class="handyman-thepic-gig-view-section">
                                    @if ($proposal->handyman->user && $proposal->handyman->user->image)
                                        <img src="{{ asset('storage/profile_images/' . $proposal->handyman->user->image) }}"
                                            alt="{{ $proposal->handyman->user->name }}" class="handyman-profile-img">
                                    @else
                                        <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                            alt="{{ $proposal->handyman->user->name }}" class="handyman-profile-img">
                                    @endif
                                </div>
                                <div class="handyman-details-gig">

                                    <div class="d-flex justify-content-between ">
                                        <h4>{{ $proposal->handyman->user->name }}</h4>

                                        <div class=" handyman-tasks">
                                            <span><i class="fa-solid fa-check-double"></i> {{ __('messages.Done') }}

                                                {{ $proposal->handyman->gigs_count }} {{ __('messages.tasks') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <div class="handyman-rating">
                                            <span class="rating-star">★</span>
                                            <span>{{ $proposal->handyman->user->rating }}
                                                ({{ $proposal->handyman->user->reviews_count }}
                                                {{ __('messages.reviews') }})
                                            </span>
                                        </div>
                                        <div class="handyman-price mt-1">
                                            {{ __('messages.JD') }}
                                            {{ number_format($proposal->price_per_hour, 2) }}/{{ __('messages.hr') }}
                                        </div>
                                    </div>



                                    <div class="d-flex justify-content-end">
                                        <!-- Report Button -->
                                        <button class="btn btn-danger report-btn mr-3 "
                                            data-handyman-id="{{ $proposal->handyman->id }}"
                                            data-gig-id="{{ $gig->id }}">
                                            {{ __('messages.ReportHandyman') }}

                                        </button>
                                        <!-- Reject Button -->
                                        <form class="ml-2"
                                            action="{{ route('proposal.reject', ['proposalId' => $proposal->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-warning ">{{ __('messages.Reject') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="handyman-description-gig">
                                <div class="handyman-description">
                                    <p class="mb-0">{{ __('messages.HandymanDescription') }}
                                        :</p>
                                    <p class="mb-0">{{ Str::limit($proposal->handyman->bio, 200) }}</p>
                                    <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $proposal->handyman->id]) }}"
                                        class="read-more-link">{{ __('messages.ReadMore') }}
                                    </a>
                                </div>

                            </div>
                            <div class="handyman-description-gig">
                                <div class="handyman-description">
                                    <h6>{{ __('messages.Howhelp') }}
                                        :</h6>
                                    <p>{{ Str::limit($proposal->proposal, 200) }}</p>
                                </div>

                            </div>

                            <div class="d-flex  w-100">
                                <div class="w-50">
                                    <form class="mt-3"
                                        action="{{ route('chat', ['receiverId' => $proposal->handyman->user->id]) }}"
                                        method="GET">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-info w-100 ">{{ __('messages.ChatFigure') }}
                                        </button>
                                    </form>
                                </div>
                                <div class="w-50 ">
                                    <form class="mt-3 ml-2"
                                        action="{{ route('proposal.award', ['proposalId' => $proposal->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        {{--  <input type="hidden" name="category_id" value="{{ $proposal->id }}">  --}}
                                        <button type="submit"
                                            class="btn btn-success ml-2 w-100 ">{{ __('messages.Award') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{--  </div>  --}}
        </div>
    </section>

    <!-- Report Handyman Modal -->
    <div class="modal fade" id="reportHandymanModal" tabindex="-1" role="dialog"
        aria-labelledby="reportHandymanModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('report.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="handyman_id" id="modal-handyman-id">
                    <input type="hidden" name="gig_id" id="modal-gig-id">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reportHandymanModalLabel">{{ __('messages.ReportHandyman') }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="report-message">{{ __('messages.Message') }}
                                :</label>
                            <textarea name="message" id="report-message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.Close') }}
                        </button>
                        <button type="submit" class="btn btn-danger">{{ __('messages.SubmitReport') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Handle the report button click and populate the modal with handyman and gig IDs
        document.querySelectorAll('.report-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const handymanId = this.getAttribute('data-handyman-id');
                const gigId = this.getAttribute('data-gig-id');

                document.getElementById('modal-handyman-id').value = handymanId;
                document.getElementById('modal-gig-id').value = gigId;

                $('#reportHandymanModal').modal('show');
            });
        });
    </script>
@endsection
