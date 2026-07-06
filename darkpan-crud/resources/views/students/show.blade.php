@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-8">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Student Details</h6>

                <table class="table table-borderless">
                    <tr>
                        <th style="width: 150px;">ID</th>
                        <td>{{ $student->id }}</td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $student->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $student->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $student->country }}</td>
                    </tr>
                    <tr>
                        <th>ZIP</th>
                        <td>{{ $student->zip }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $student->status }}</td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td>{{ $student->created_at->format('M d, Y H:i') }}</td>
                    </tr>
                </table>

                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">
                    <i class="fa fa-edit me-2"></i>Edit
                </a>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
