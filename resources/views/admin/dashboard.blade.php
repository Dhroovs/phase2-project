@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Admin Dashboard</h2>
    <a href="/admin/records/create" class="btn btn-primary">+ Add New Record</a>
</div>

@if($records->isEmpty())
    <div class="alert alert-info">No records yet! Click "Add New Record" to create one.</div>
@else
<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->title }}</td>
            <td>{{ $record->description }}</td>
            <td>
                @if($record->status == 'Approved')
                    <span class="badge bg-success">Approved</span>
                @elseif($record->status == 'Rejected')
                    <span class="badge bg-danger">Rejected</span>
                @else
                    <span class="badge bg-warning text-dark">Pending</span>
                @endif
            </td>
            <td>
                <a href="/admin/records/{{ $record->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="/admin/records/{{ $record->id }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection