@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.storeOwnerApplyBread') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                    <li>{{ __('messages.storeOwnerApplyBreadSmall') }}</li>

                    <li>{{ __('messages.storeOwnerApplyBreadSmall3') }}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <h1>Store Owner Application Form</h1>

            <form action="{{ route('storeowner.apply.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="store_name">{{ __('messages.StoreNameEn') }}</label>
                    <input type="text" name="store_name" id="store_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="store_name_ar">{{ __('messages.StoreNameAr') }}</label>
                    <input type="text" name="store_name_ar" id="store_name_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="contact_number">{{ __('messages.ContactNumber') }}</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">{{ __('messages.AddressEn') }}</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address_ar">{{ __('messages.AddressAr') }}</label>
                    <input type="text" name="address_ar" id="address_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="location">{{ __('messages.Location') }}</label>
                    <input type="text" name="location" id="location" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">{{ __('messages.DescriptionEn') }}</label>
                    <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="description_ar">{{ __('messages.DescriptionAr') }}</label>
                    <textarea name="description_ar" id="description_ar" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="certificate_image">{{ __('messages.UploadCertificate') }}</label>
                    <input type="file" name="certificate_image" id="certificate_image" class="form-control-file"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">{{ __('messages.SubmitApplication') }}</button>
            </form>
        </div>
    </section>
@endsection
