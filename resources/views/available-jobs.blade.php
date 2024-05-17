<!-- resources/views/available-jobs.blade.php -->
@extends('layout')

@section('title', 'Available Jobs')

@section('content')
    <h1>Available Jobs</h1>
    <p>Current job openings...</p>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <h5 class="mb-1">Job Title 1</h5>
            <p class="mb-1">Brief job description...</p>
            <small>Location: City, State</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <h5 class="mb-1">Job Title 2</h5>
            <p class="mb-1">Brief job description...</p>
            <small>Location: City, State</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <h5 class="mb-1">Job Title 3</h5>
            <p class="mb-1">Brief job description...</p>
            <small>Location: City, State</small>
        </a>
        <!-- Add more job listings as needed -->
    </div>
@endsection
