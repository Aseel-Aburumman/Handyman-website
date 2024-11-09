@extends('layouts.inside')

@section('content')
    {{--  <!--==============================
    Breadcumb
============================== -->  --}}
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.TermsOfServiceTitle') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li>{{ __('messages.TermsOfServiceTitle') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>


    {{-- <!--==============================
    Terms of Service Page
    ==============================--> --}}
    <section class="overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/pattern_bg_1.png">
        <div class="container mt-5">
            <div class="terms-wrapper">
                <div class="container">
                    <div class="terms-content">
                        <h1 class="terms-title">{{ __('messages.TermsOfServiceTitle') }}</h1>

                        <section class="terms-section">
                            <h2>{{ __('messages.EffectiveDate') }}</h2>
                            {{--  <p>{{ __('messages.EffectiveDateContent') }}</p>  --}}
                            <p>{{ __('messages.WelcomeText') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.Definitions') }}</h2>
                            <ul>
                                <li><strong>{{ __('messages.Customer') }}:</strong> {{ __('messages.CustomerDefinition') }}
                                </li>
                                <li><strong>{{ __('messages.Handyman') }}:</strong>
                                    {{ __('messages.HandymanDefinition') }}
                                </li>
                                <li><strong>{{ __('messages.Gig') }}:</strong> {{ __('messages.GigDefinition') }}</li>
                            </ul>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.Eligibility') }}</h2>
                            <p>{{ __('messages.EligibilityContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.CreatingGigs') }}</h2>
                            <p>{{ __('messages.CreatingGigsContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.BookingServices') }}</h2>
                            <p>{{ __('messages.BookingServicesContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.PaymentTerms') }}</h2>
                            <p>{{ __('messages.PaymentTermsContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.CancellationRefundPolicy') }}</h2>
                            <ul>
                                <li><strong>{{ __('messages.ForCustomers') }}:</strong>
                                    {{ __('messages.CustomerCancellationContent') }}</li>
                                <li><strong>{{ __('messages.ForHandymen') }}:</strong>
                                    {{ __('messages.HandymanCancellationContent') }}</li>
                            </ul>
                            <p>{{ __('messages.RefundsContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.ResponsibilityLiability') }}</h2>
                            <ul>
                                <li><strong>{{ __('messages.HandymanResponsibilities') }}:</strong>
                                    {{ __('messages.HandymanResponsibilitiesContent') }}</li>
                                <li><strong>{{ __('messages.CustomerResponsibilities') }}:</strong>
                                    {{ __('messages.CustomerResponsibilitiesContent') }}</li>
                            </ul>
                            <p>{{ __('messages.PlatformLiability') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.ReviewsRatings') }}</h2>
                            <p>{{ __('messages.ReviewsRatingsContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.DisputeResolution') }}</h2>
                            <p>{{ __('messages.DisputeResolutionContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.ProhibitedActivities') }}</h2>
                            <p>{{ __('messages.ProhibitedActivitiesContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.ModificationOfTerms') }}</h2>
                            <p>{{ __('messages.ModificationOfTermsContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.Termination') }}</h2>
                            <p>{{ __('messages.TerminationContent') }}</p>
                        </section>

                        <section class="terms-section">
                            <h2>{{ __('messages.ContactInformation') }}</h2>
                            <p>{{ __('messages.ContactInformationContent') }}</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
