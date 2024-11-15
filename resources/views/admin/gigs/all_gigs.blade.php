@extends('layouts.admin_master')

@section('content')
    <div class="pagetitle">
        <h1>All Gigs</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Gigs</h5>

                        <form method="GET" action="{{ route('admin.all_gigs') }}">
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
                                    <select name="handyman" class="form-select">
                                        <option value="">Select Handyman</option>
                                        @foreach ($handymen as $handyman)
                                            {{--  <option value="{{ $handyman->id }}">{{ $handyman->user->name }}</option>  --}}
                                            <option value="{{ $handyman ? $handyman->id : '' }}">
                                                {{ $handyman ? $handyman->user->name : 'Not selected yet' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                    <button href="{{ route('admin.all_gigs') }}" type="submit"
                                        class="btn btn-primary">Reset</button>

                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Handyman</th>
                                    <th class="tableHide">Location</th>
                                    <th class="tableHide2">Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gigs as $gig)
                                    <tr>
                                        <td>{{ $gig->title }}</td>
                                        {{--  <td>{{ $gig->handyman->user->name }}</td>  --}}
                                        <td>{{ $gig->handyman->user->name ?? 'Not selected yet' }}</td>

                                        <td class="tableHide">{{ $gig->location }}</td>
                                        <td class="tableHide2">{{ $gig->status->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.view_gig', $gig->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.edit_gig', $gig->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('admin.delete_gig', $gig->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $gigs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
