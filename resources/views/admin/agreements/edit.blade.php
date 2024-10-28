@extends('layouts.admin_master')

@section('content')
    <h1>Edit Agreement</h1>

    <form action="{{ route('admin.agreements.update', $agreement->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="agreement_type">Agreement Type</label>
            <select name="agreement_type" class="form-control" required disabled>
                <option value="handyman" {{ $agreement->agreement_type == 'handyman' ? 'selected' : '' }}>Handyman</option>
                <option value="store_owner" {{ $agreement->agreement_type == 'store_owner' ? 'selected' : '' }}>Store Owner
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $agreement->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
