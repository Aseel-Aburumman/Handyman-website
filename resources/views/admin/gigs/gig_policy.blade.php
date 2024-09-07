@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Gig Policy Management</h1>
</div>

<section class="section">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('gig-policies.search') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search policies..." name="search" value="{{ request()->search }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gig Policies</h5>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 75%">Content</th>
                                <th>Visible</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($policies as $policy)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $policy->content }}</td>
                                <td>{{ $policy->visible ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href="{{ route('gig-policies.edit', $policy->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('gig-policies.destroy', $policy->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
