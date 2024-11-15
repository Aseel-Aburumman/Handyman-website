@extends('layouts.admin_master')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item ">User Control Center</li>
                <li class="breadcrumb-item ">List of Stores Owners</li>
                <li class="breadcrumb-item active">Store Owner Info Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Update Store Owner Information</h5>

                    <!-- Update Store Owner Information Form -->
                    <form class="row g-3" method="POST" action="{{ route('admin.update_store_owner', $store_owner->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-md-12">
                            <label for="inputName" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="inputName"
                                value="{{ old('name', $store_owner->name) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail"
                                value="{{ old('email', $store_owner->email) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword"
                                placeholder="Leave blank to keep current password">
                        </div>

                        <div class="col-md-12">
                            <label for="inputImage" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="inputImage" name="image">
                            @if ($store_owner->image)
                                <img src="{{ url('/user_images/' . $store_owner->image) }}" alt="Profile Image"
                                    class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" name="location" class="form-control" id="inputAddress"
                                value="{{ old('location', $deliveryInfo->location ?? '') }}" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputBuilding" class="form-label">Building No</label>
                            <input type="text" name="building_no" class="form-control" id="inputBuilding"
                                value="{{ old('building_no', $deliveryInfo->building_no ?? '') }}"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="inputCity"
                                value="{{ old('city', $deliveryInfo->city ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="inputPhone"
                                value="{{ old('phone', $deliveryInfo->phone ?? '') }}">
                        </div>

                        <!-- Store Owner Details -->
                        <div class="col-md-6">
                            <label for="store_name" class="form-label">Store Name</label>
                            <input type="text" name="store_name" class="form-control" id="store_name"
                                value="{{ old('store_name', $storeOwnerDetails->store_name ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" id="contact_number"
                                value="{{ old('contact_number', $storeOwnerDetails->contact_number ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Store Address</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ old('address', $storeOwnerDetails->address ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="certificate_id" class="form-label">Certificate Id</label>
                            <input type="text" name="certificate_id" class="form-control" id="certificate_id"
                                value="{{ old('certificate_id', $storeOwnerDetails->certificate_id ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="store_location" class="form-label">Store Location</label>
                            <input type="text" name="store_location" class="form-control" id="store_location"
                                value="{{ old('store_location', $storeDetails->location ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="description" class="form-label">Store Description</label>
                            <input type="text" name="description" class="form-control" id="description"
                                value="{{ old('description', $storeDetails->description ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="status_id" class="form-label">Store Status</label>
                            <input type="text" name="status_id" class="form-control" id="status_id"
                                value="{{ old('status_id', $storeOwnerDetails->store->status->name ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="rating" class="form-label">Store Rating</label>
                            <input type="text" name="rating" class="form-control" id="rating"
                                value="{{ old('rating', $storeOwnerDetails->store->rating ?? '') }}">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Update Store Owner Information Form -->
                </div>
            </div>

        </div>
    </section>
@endsection
