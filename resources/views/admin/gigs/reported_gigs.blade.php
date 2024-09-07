@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Reported Gigs</h1>
</div>

<section class="section">
                {{-- Display success message --}}
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
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
                                    <form action="{{ route('admin.resolve_gig', $gig->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Resolve</button>
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
