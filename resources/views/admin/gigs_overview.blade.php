@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Gigs Overview</h1>
</div>

<section class="section dashboard">
    <div class="row">
        <!-- Gigs by Status -->
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">Open Gigs</h5>
                    <h6>{{ $gigCounts['open'] }}</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">In Progress</h5>
                    <h6>{{ $gigCounts['in_progress'] }}</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">Completed</h5>
                    <h6>{{ $gigCounts['completed'] }}</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">Canceled</h5>
                    <h6>{{ $gigCounts['canceled'] }}</h6>
                </div>
            </div>
        </div>

        <!-- Recent Gigs -->
        <div class="col-lg-12">
            <div class="card recent-gigs">
                <div class="card-body">
                    <h5 class="card-title">Recent Gigs</h5>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($recentGigs as $gig)
                    <tr>
                        <td>{{ $gig->title }}</td>
                        <td>{{ $gig->location }}</td>
                        <td>{{ $gig->status->name }}</td>
                        <td>
                            <a href="{{ route('admin.view_gig', $gig->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.edit_gig', $gig->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.delete_gig', $gig->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
