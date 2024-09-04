@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Reported Gigs</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reported Gigs</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportedGigs as $gig)
                            <tr>
                                <td>{{ $gig->title }}</td>
                                <td>{{ $gig->location }}</td>
                                <td>{{ $gig->status->name }}</td>
                                <td>Reported for issue</td>
                                <td>
                                    <a href="{{ route('admin.resolve_gig', $gig->id) }}" class="btn btn-success btn-sm">Resolve</a>
                                    <a href="{{ route('admin.cancel_gig', $gig->id) }}" class="btn btn-danger btn-sm">Cancel</a>
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
