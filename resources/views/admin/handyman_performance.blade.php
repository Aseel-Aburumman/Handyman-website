@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Handyman Performance</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Handyman Performance</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Handyman</th>
                                <th>Gigs Completed</th>
                                <th>Average Rating</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($handymen as $handyman)
                            <tr>
                                <td>{{ $handyman->user->name }}</td>
                                <td>{{ $handyman->gigs->where('status_id', 9)->count() }}</td> <!-- Assuming '9' is the 'Completed' status -->
                                <td>{{ $handyman->reviews->avg('rating') }}</td>
                                <td>
                                    <a href="{{ route('admin.view_handyman', $handyman->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.suspend_handyman', $handyman->id) }}" class="btn btn-danger btn-sm">Suspend</a>
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
