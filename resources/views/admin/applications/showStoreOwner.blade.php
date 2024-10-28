@extends('layouts.admin_master')

@section('content')
    <h1>Store Owner Application - {{ $application->user->name }}</h1>

    <ul class="d-flex">
        <div class="w-50">
            <li><strong>Store Name:</strong> {{ $application->store_name }}</li>
            <li><strong>Store Name (Ar):</strong> {{ $application->store_name_ar }}</li>
            <li><strong>Contact Number:</strong> {{ $application->contact_number }}</li>
            <li><strong>Location:</strong> {{ $application->location }}</li>
            <li><strong>Address:</strong> {{ $application->address }}</li>
            <li><strong>Address (Ar):</strong> {{ $application->address_ar }}</li>
            <li><strong>Status:</strong> {{ $application->status }}</li>
        </div>
        <li class="w-50"><strong>Certificate:</strong>
            <div class="w-100">
                @if ($application->certificate->name)
                    <img src="{{ asset('storage/certificate_images/' . $application->certificate->name) }}"
                        alt="Profile Picture" style="width:300px;">
                @else
                    <img src="{{ asset('assets/img/team/team_1_1.jpg') }}" alt="Default Profile Picture">
                @endif
            </div>
        </li>
    </ul>

    <a href="{{ route('admin.applications.index') }}" class="btn btn-secondary">Back to Applications</a>
@endsection
