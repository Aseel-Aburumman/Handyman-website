@extends('layouts.inside')

@section('content')
    {{--  <!--==============================
            Breadcumb
        ============================== -->  --}}
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.ContactUs') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                    <li>{{ __('messages.ContactUs') }}</li>
                </ul>
            </div>
        </div>
    </div>
    {{--  <!--==============================
        Contact Info Area
        ==============================-->  --}}
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                        alt="Icon" />{{ __('messages.GetInTouch') }}
                </span>
                <h2 class="sec-title">{{ __('messages.contactInformation') }}
                </h2>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">{{ __('messages.OurAddress') }}
                            </h5>
                            <p class="box-text">{{ __('messages.location') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">{{ __('messages.PhoneNumber') }}
                            </h5>
                            <p class="box-text">
                                <a href="tel:+962796615575">+962 79 661 5575</a>
                                <a href="tel:+962799697594">+962 79 969 7594</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">{{ __('messages.EmailAddress') }}
                            </h5>
                            <p class="box-text">
                                <a href="mailto:support@kafmueen.com">support@kafmueen.com</a>
                                <a href="mailto:career@kafmueen.com">career@kafmueen.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <!--==============================
        Contact Area
        ==============================-->  --}}
    <div class="space" data-bg-src="assets/img/bg/contact_bg_6.jpg">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row align-items-center">
                <div class="col-xl-6 text-center text-xl-start">
                    <form id="contactForm" action="{{ route('contact.storeTicket') }}" method="POST"
                        class="contact-form ajax-contact">
                        @csrf

                        <h2 class="sec-title">{{ __('messages.GetQuote') }}
                        </h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="{{ __('messages.YourName') }}" />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ __('messages.EmailAddress') }}" />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number"
                                    placeholder="{{ __('messages.PhoneNumber') }}" />
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="{{ __('messages.subject') }}" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>
                                        {{ __('messages.SelectSubject') }}
                                    </option>
                                    <option value="General Query">
                                        {{ __('messages.GeneralQuery') }}
                                    </option>
                                    <option value="Help Support">
                                        {{ __('messages.HelpSupport') }}
                                    </option>
                                    <option value="Sales Support">
                                        {{ __('messages.SalesSupport') }}
                                    </option>
                                </select>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn">{{ __('messages.SubmitRequest') }}
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                        {{--  <p class="form-messages mb-0 mt-3"></p>  --}}
                    </form>
                </div>
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="text-center">
                        <a href="https://www.youtube.com/watch?v=4mMGpf9BK0U" class="play-btn style4 popup-video"><i
                                class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1692.4598450578603!2d35.91044596116633!3d31.96307536906288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1014048fa25%3A0x9f4515881213fb7a!2sAl%20Fares%20Luxury%20furnished%20Apartment-Damac%20Tower!5e0!3m2!1sar!2sjo!4v1731101485148!5m2!1sar!2sjo"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <script>
        // Example translation messages
        const translations = {
            en: {
                submission_message: "We will get back to you soon",
            },
            // Add other languages as needed
            ar: {
                submission_message: "سيتواصل معك فريقنا باسرع وقت ممكن ",
            }
        };

        @if (app()->getLocale() == 'en')
            const userLang = 'en';
        @else
            const userLang = 'ar';
        @endif
        // Detect or set the user's language
        //const userLang = 'en'; // Replace this with dynamic language detection logic

        // Handle form submission
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevents the default form submission

            // Form submission logic (e.g., AJAX call)
            // For now, we’ll directly show the SweetAlert

            // Show SweetAlert with the translated message
            Swal.fire({
                icon: 'success',
                title: translations[userLang].submission_message,
                confirmButtonText: 'OK'
            }).then(() => {
                // Reset form after alert
                document.getElementById("contactForm").reset();
            });
        });
    </script>
@endsection
