@extends('layout')

@section('title', 'Create New Job')

@section('content')
<div class="container job-create">
    <h1 class="text-center mb-4">Create New Job</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="responsibilities">Responsibilities</label>
            <textarea class="form-control" id="responsibilities" name="responsibilities" rows="4" required>{{ old('responsibilities') }}</textarea>
        </div>
        <div class="form-group">
            <label for="requirements">Requirements</label>
            <textarea class="form-control" id="requirements" name="requirements" rows="4" required>{{ old('requirements') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Job</button>
    </form>
</div>
@endsection
