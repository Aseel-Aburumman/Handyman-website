@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>View Gig</h1>
</div>

<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gig Details</h5>
            <p><strong>Title:</strong> {{ $gig->title }}</p>
            <p><strong>Location:</strong> {{ $gig->location }}</p>
            <p><strong>Status:</strong> {{ $gig->status->name }}</p>
            <p><strong>Description:</strong> {{ $gig->description }}</p>
            <p><strong>Handyman:</strong> {{ $gig->handyman->name }}</p>
            <a href="{{ route('admin.edit_gig', $gig->id) }}" class="btn btn-warning">Edit Gig</a>
        </div>
    </div>
</section>
@endsection
