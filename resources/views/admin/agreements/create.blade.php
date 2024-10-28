@extends('layouts.admin_master')

@section('content')
    <h1>Add New Agreement</h1>

    <form action="{{ route('admin.agreements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="agreement_type">Agreement Type</label>
            <select name="agreement_type" class="form-control" required>
                <option value="handyman">Handyman</option>
                <option value="store_owner">Store Owner</option>
            </select>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
