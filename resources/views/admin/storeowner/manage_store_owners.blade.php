@extends('layouts.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">User Control Center</li>
                <li class="breadcrumb-item active">List of Store Owners</li>
            </ol>
        </nav>
    </div>
    {{--  <!-- End Page Title -->  --}}

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">List Of Customers</h5>
<a href="{{ route('admin.create_store_owner') }}" class="btn btn-success mb-3">
                            <i class="fa-solid fa-user-plus"></i> Add New Store Owner
                        </a>
                    </div>

                    <form action="{{ route('admin.manage_store_owners') }}" method="GET" class="d-flex mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary ms-2">Search</button>
                        <a href="{{ route('admin.manage_store_owners') }}" class="btn btn-secondary ms-2">Reset</a>
                    </form>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Date Created</th>
                                <th scope="col" class="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->rating }}</td>
                                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                    <td class="actions">
                                        <a href="{{ route('admin.view_store_owner', ['id' => $user->id]) }}" class="fa-solid fa-eye"></a>
                                        <a href="{{ route('admin.edit_store_owner', ['id' => $user->id]) }}" class="fa-solid fa-pencil"></a>
                                        <form action="{{ route('admin.delete_store_owner', ['id' => $user->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background:none; border:none; color:#007bff; cursor:pointer;">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                </div>
            </div>
        </div>
    </section>

@endsection
