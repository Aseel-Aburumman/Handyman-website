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

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Date Created</th>
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
