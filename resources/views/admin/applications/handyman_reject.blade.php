@extends('layouts.admin_master')

@section('content')
    <h1>Reject Handyman Application</h1>

    <form action="{{ route('admin.rejectHandyman', $application->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="flagged_parts">Flagged Parts</label>
            <select name="flagged_parts[]" id="flagged_parts" class="form-control w-25" multiple>
                <option value="experience">Experience</option>
                <option value="certifications">Certifications</option>
                <option value="skills">Skills</option>

                <option value="price_per_hour">Price Per Hour</option>
            </select>
        </div>

        <button type="submit" class="mt-3 btn btn-danger">Reject Application</button>
    </form>
@endsection
