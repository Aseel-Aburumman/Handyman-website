@extends('layouts.admin_master')

@section('content')
    <h1>Handyman Application - {{ $application->user->name }}</h1>

    <ul>
        <li><strong>Price Per Hour:</strong> {{ $application->price_per_hour }}</li>
        <li><strong>Experience:</strong> {{ $application->experience }}</li>
        <li><strong>Bio:</strong> {{ $application->bio }}</li>
        <li><strong>Status:</strong> {{ $application->status }}</li>
    </ul>

    <a href="{{ route('admin.applications.index') }}" class="btn btn-secondary">Back to Applications</a>
@endsection
