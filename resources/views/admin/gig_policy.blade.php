@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Gig Policy Management</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gig Policies</h5>

                    <form action="{{ route('admin.update_gig_policy') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="policy_content">Edit Gig Policy</label>
                            <textarea name="policy_content" class="form-control" rows="10">{{ $gigPolicy }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save Policy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
