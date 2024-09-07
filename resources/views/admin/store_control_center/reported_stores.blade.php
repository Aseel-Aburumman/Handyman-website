@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Reported Gigs</h1>
</div>

<section class="section">
                {{-- Display success message --}}
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reported Gigs</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Store Name</th>
                                <th>Store Owner</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportedStores as $Rstore)
                            <tr>
                                <td>{{ $Rstore->store->name }}</td>
                                <td>{{ $Rstore->store->storeOwner ? $Rstore->store->storeOwner->user->name ?? 'No Owner' : 'No Owner' }}</td>
                                <td>{{ $Rstore->store->status ? $Rstore->store->status->name ?? 'No Status' : 'No Status' }}</td>
                                <td>
                                    <form action="{{ route('admin.resolve_store', $Rstore->store->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Resolve</button>
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
