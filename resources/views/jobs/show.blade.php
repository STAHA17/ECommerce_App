@extends('layout')

@section('title', $job->title)

@section('content')
<div class="container job-detail">
    <h1 class="text-center mb-4">{{ $job->title }}</h1>
    <p class="text-muted text-center">{{ $job->location }}</p>

    <div class="job-description mt-4">
        <h3>Job Description</h3>
        <p>{{ $job->description }}</p>
    </div>

    <div class="job-responsibilities mt-4">
        <h3>Responsibilities</h3>
        <p>{{ $job->responsibilities }}</p>
    </div>

    <div class="job-requirements mt-4">
        <h3>Requirements</h3>
        <p>{{ $job->requirements }}</p>
    </div>
</div>
@endsection
