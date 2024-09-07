@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Create Gig Policy</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add a new Gig Policy</h5>
                    <form action="{{ route('gig-policies.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="content" class="form-label">Policy Content</label>
                            <textarea class="form-control" id="content" name="content" required></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="visible" name="visible" value="1" checked>
                            <label class="form-check-label" for="visible">Visible</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
