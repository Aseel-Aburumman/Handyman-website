@extends('layouts.admin_master')

@section('content')
    <h1>Reject Store Owner Application</h1>

    <form action="{{ route('admin.rejectStoreOwner', $application->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="flagged_parts">Flagged Parts</label>
            <select name="flagged_parts[]" id="flagged_parts" class="form-control" multiple>
                <option value="store_name">Store Name</option>
                <option value="business_registration">Business Registration</option>
                <option value="contact_number">Contact Number</option>
                <option value="address">Address</option>
            </select>
        </div>

        <button type="submit" class="btn btn-danger">Reject Application</button>
    </form>
@endsection
