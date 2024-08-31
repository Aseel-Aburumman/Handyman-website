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

        {{--  <!-- Card with an image on left -->  --}}
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url("/user_images/".$user->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">sendor name</h5>
                <p class="card-text">the message</p>
                <h6 class="card-subtitle mb-2 text-muted">message date and tome</h6>
                <p class="card-text"><a href="{{ route to the chat with the sender }}" class="btn btn-primary">Reblay</a></p>

            </div>
            </div>
          </div>
        </div>
        {{--  <!-- End Card with an image on left -->  --}}



      </div>
    </div>
  </section>


@endsection
