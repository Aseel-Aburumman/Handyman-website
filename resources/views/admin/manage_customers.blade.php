@extends('layouts.admin_master')

@section('content')


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>

          <li class="breadcrumb-item ">User Control Center</li>
          <li class="breadcrumb-item active">List of Customers</li>
        </ol>
      </nav>
    </div>

    {{--  <!-- End Page Title -->  --}}

    <section class="section dashboard">
      <div class="row">

        

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Of Customers</h5>

            <form action="{{ route('admin.manage_customers') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary ms-2">Search</button>
                <a href="{{ route('admin.manage_customers') }}" class="btn btn-secondary ms-2">Reset</a>
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
    <a href="{{ route('admin.edit_customer', ['id' => $user->id]) }}" class="fa-solid fa-pencil"></a>
<form action="{{ route('admin.delete_customer', ['id' => $user->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this customer?');">
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
