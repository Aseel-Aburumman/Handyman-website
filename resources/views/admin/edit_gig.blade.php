@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Edit Gig</h1>
</div>

<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Gig</h5>

            <form action="{{ route('admin.update_gig', $gig->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $gig->title }}">
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ $gig->location }}">
                </div>

                <div class="mb-3">
                    <label for="status_id" class="form-label">Status</label>
                    <select id="status_id" name="status_id" class="form-select">
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}" {{ $gig->status_id == $status->id ? 'selected' : '' }}>
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Gig</button>
            </form>
        </div>
    </div>
</section>
@endsection
