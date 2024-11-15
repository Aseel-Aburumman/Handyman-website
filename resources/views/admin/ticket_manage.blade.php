@extends('layouts.admin_master')

@section('content')
    <div class="pagetitle">
        <h1>Ticket Management</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Ticket Management</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Tickets</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th class="tableHide" scope="col">#</th>
                                <th scope="col">Subject</th>
                                <th class="tableHide2" scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th class="tableHide" scope="col">Created At</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <th class="tableHide" scope="row">{{ $loop->iteration }}
                                    </th>
                                    <td>{{ $ticket->subject }}</td>
                                    <td class="tableHide2">{{ $ticket->description }}</td>
                                    <td>
                                        <form action="{{ route('admin.update_ticket_status', $ticket->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="status_id" class="form-select" onchange="this.form.submit()">
                                                @foreach ($statuses as $status)
                                                    <option value="{{ $status->id }}"
                                                        {{ $ticket->status_id == $status->id ? 'selected' : '' }}>
                                                        {{ $status->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </td>
                                    <td class="tableHide">{{ \Carbon\Carbon::parse($ticket->created_at)->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.view_ticket', $ticket->id) }}"
                                            class="btn btn-primary">View</a>

                                        <a href="/admin/chat/{{ $ticket->user_id }}/{{ $ticket->id }}"
                                            class="btn btn-primary">Message User</a>



                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </section>
@endsection
