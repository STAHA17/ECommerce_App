<!-- resources/views/available-jobs.blade.php -->
@extends('layout')

@section('title', 'Available Jobs')

@section('content')
<div class="container available-jobs">
    <h1 class="text-center mb-4">Available Jobs</h1>
    <p class="lead text-center">Explore our current job openings and find the perfect opportunity to join our team.</p>

    <!-- Add new button init -->
    <!-- <div class="text-center mb-4">
        <a href="{{ route('jobs.create') }}" class="btn btn-success">Create New Job</a>
    </div> -->

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start job-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 job-title">Junior Web Developer</h5>
                <small class="text-muted job-location">Location: City, State</small>
            </div>
            <p class="mb-1 job-description">Brief job description detailing the key responsibilities and requirements...</p>
        </a>
        <a href="#" class="mt-2 list-group-item list-group-item-action flex-column align-items-start job-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 job-title">Software Engineer</h5>
                <small class="text-muted job-location">Location: City, State</small>
            </div>
            <p class="mb-1 job-description">Brief job description detailing the key responsibilities and requirements...</p>
        </a>
        <a href="#" class="mt-2 list-group-item list-group-item-action flex-column align-items-start job-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 job-title">Software Quality Assurance</h5>
                <small class="text-muted job-location">Location: City, State</small>
            </div>
            <p class="mb-1 job-description">Brief job description detailing the key responsibilities and requirements...</p>
        </a>
        <!-- Add more job listings as needed -->
    </div>
</div>
@endsection
