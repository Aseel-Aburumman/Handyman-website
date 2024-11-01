@extends('layouts.admin_master')

@section('content')

<div class="pagetitle">
  <h1>Gigs Management</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
      <li class="breadcrumb-item active">Gigs Control Center</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row">

    <div class="card recent-gigs overflow-auto">
      <div class="card-body">
        <h5 class="card-title">Recent Gigs <span>| Control Center</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Location</th>
              <th scope="col">Estimated Time</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Date Created</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($gigs as $gig)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $gig->title }}</td>
              <td>{{ $gig->location }}</td>
              <td>{{ $gig->estimated_time }} hours</td>
              <td>${{ $gig->price }}</td>
              <td>
                <form action="{{ route('admin.update_gig_status', $gig->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('PUT')
                  <select name="status_id" class="form-select" onchange="this.form.submit()">
                    @foreach($statuses as $status)
                    <option value="{{ $status->id }}" {{ $gig->status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                    @endforeach
                  </select>
                </form>
              </td>
              <td>{{ \Carbon\Carbon::parse($gig->created_at)->format('Y-m-d') }}</td>
              <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
                <a href="#" class="btn btn-danger btn-sm">Cancel</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>

  </div>
</section>

@endsection
