@extends('layouts.admin_master')

@section('content')


<div class="pagetitle">
    <h1>Notification Center</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Notification Center</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
<div class="card">
    <div class="card-body">
<!-- Table with hoverable rows -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Notification</th>
            <th scope="col">Created At</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($notifications as $notification)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td >@if ($notification->category == 'primary')
                    <i class="bi bi-exclamation-circle text-primary"></i>
                  @elseif ($notification->category == 'success')
                    <i class="bi bi-check-circle text-success"></i>
                  @elseif ($notification->category == 'danger')
                    <i class="bi bi-x-circle text-danger"></i>
                  @elseif ($notification->category == 'warning')
                    <i class="bi bi-info-circle text-warning"></i>
                  @endif</td>
                <td>{{ $notification->message }}</td>
                <td>{{ $notification->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No notifications available.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<!-- End Table with hoverable rows -->
    </div>
</div>
      </div>
    </div>
  </section>


@endsection
