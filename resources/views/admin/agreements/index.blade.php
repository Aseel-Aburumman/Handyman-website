@extends('layouts.admin_master')

@section('content')
    <h1>Manage Agreements</h1>

    <a href="{{ route('admin.agreements.create') }}" class="btn btn-primary">Add New Agreement</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agreements as $agreement)
                <tr>
                    <td>{{ $agreement->id }}</td>
                    <td>{{ $agreement->agreement_type }}</td>
                    <td>{{ Str::limit($agreement->content, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.agreements.edit', $agreement->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.agreements.destroy', $agreement->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
