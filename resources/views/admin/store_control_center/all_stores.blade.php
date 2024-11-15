@extends('layouts.admin_master')

@section('content')
    <div class="pagetitle">
        <h1>Stores Control Center</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Stores Control Center</li>
                <li class="breadcrumb-item active">All Stores List</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Stores</h5>

                        <!-- Filters (if needed) -->
                        <form method="GET" action="{{ route('store_control_center.all_stores') }}">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="status" class="form-select">
                                        <option value="">Select Status</option>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="store_owner" class="form-select">
                                        <option value="">Select Store Owner</option>
                                        @foreach ($storeOwners as $storeOwner)
                                            <option value="{{ $storeOwner->id }}">{{ $storeOwner->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                    <button href="{{ route('store_control_center.all_stores') }}" type="submit"
                                        class="btn btn-primary">Reset</button>
                                </div>
                            </div>
                        </form>

                        <!-- Stores Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Store Name</th>
                                    <th class="tableHide">Store Owner</th>
                                    <th class="tableHide2">Number of Products</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stores as $store)
                                    <tr>
                                        <td>{{ $store->name }}</td>
                                        <td class="tableHide">{{ $store->storeOwner->user->name }}</td>
                                        <!-- Access the owner's user name -->
                                        <td class="tableHide2">{{ $store->products_count }}</td>
                                        <td>{{ $store->status->name }}</td>
                                        <td>
                                            <a href="{{ route('store_control_center.view_store', ['id' => $store->id]) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('store_control_center.edit_store', $store->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('store_control_center.delete_store', $store->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        {{ $stores->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
