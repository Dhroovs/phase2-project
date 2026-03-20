@extends('layout')

@section('content')
<h2 class="mb-4">User Dashboard</h2>

@if($records->isEmpty())
    <div class="alert alert-info">No records available yet!</div>
@else
<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
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
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection