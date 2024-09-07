@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Handyman Performance</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            {{-- Display success message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reported Handymans</h5>

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
                            @forelse($Rhandymen as $handyman)
                            <tr>
                                <td>{{ $handyman->name }}</td>
                                <td>{{ $handyman->gigs->where('status_id', 9)->count() }}</td> <!-- Assuming '9' is the 'Completed' status -->
                                <td>{{ $handyman->reviews->avg('rating') }}</td>
                                <td>
                                    <a href="{{ route('admin.view_handyman', $handyman->id) }}" class="btn btn-info btn-sm">View</a>
                                    @if($handyman->suspended)
                                    <form action="{{ route('admin.unsuspend_handyman', $handyman->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Unsuspend</button>
                                    </form>
                                    @else
                                    <form action="{{ route('admin.suspend_handyman', $handyman->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Suspend</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No reported handymen found.</td>
                            </tr>
                            @endforelse                        </td>
                        </tbody>
                    </table>
                </div>
            </div>



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
                                    <a href="{{ route('admin.view_handyman', $handyman->user->id) }}" class="btn btn-info btn-sm">View</a>
                                    <!-- Use a form for the suspend action to make a POST request -->
                                    @if($handyman->suspended)
                                    <!-- Unsuspend Button -->
                                    <form action="{{ route('admin.unsuspend_handyman', $handyman->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Unsuspend</button>
                                    </form>
                                    @else
                                    <!-- Suspend Button -->
                                    <form action="{{ route('admin.suspend_handyman', $handyman->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Suspend</button>
                                    </form>
                                    @endif                            </td>
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
