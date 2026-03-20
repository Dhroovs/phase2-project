@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4>Edit Record</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/records/{{ $record->id }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $record->title }}" required>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" required>{{ $record->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="Pending" {{ $record->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Approved" {{ $record->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                            <option value="Rejected" {{ $record->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/admin/dashboard" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning">Update Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection