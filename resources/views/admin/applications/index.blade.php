@extends('layouts.admin_master')

@section('content')
    <h1>Applications</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2>Handyman Applications</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Skills</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($handymanApplications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->user->name }}</td>
                    <td>{{ $application->skills }}</td>
                    <td>{{ $application->status }}</td>
                    <td>
                        <a href="{{ route('admin.showHandyman', $application->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.rejectHandymanForm', $application->id) }}" class="btn btn-danger">Reject</a>
                        <form action="{{ route('admin.approveHandyman', $application->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Store Owner Applications</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Store Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($storeOwnerApplications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->user->name }}</td>
                    <td>{{ $application->store_name }}</td>
                    <td>{{ $application->status }}</td>
                    <td>
                        <a href="{{ route('admin.showStoreOwner', $application->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.rejectStoreOwnerForm', $application->id) }}"
                            class="btn btn-danger">Reject</a>
                        <form action="{{ route('admin.approveStoreOwner', $application->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
