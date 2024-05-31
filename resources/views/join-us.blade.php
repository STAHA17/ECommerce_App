@extends('layout')

@section('title', 'Join Us')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Join Our Team</h1>
    <p class="lead text-center">At our company, we value passion, creativity, and dedication. We are always on the lookout for talented individuals to join our dynamic team. Here’s why you should consider joining us and how you can apply.</p>

    <h3 class="mt-5">Benefits of Working with Us</h3>
    <ul class="list-unstyled">
        <li class="media my-4">
            <i class="fas fa-check-circle mr-3 fa-2x text-success"></i>
            <div class="media-body">
                <h5 class="mt-0 mb-1">Competitive Salary</h5>
                We offer a competitive salary package that rewards your hard work and dedication.
            </div>
        </li>
        <li class="media my-4">
            <i class="fas fa-check-circle mr-3 fa-2x text-success"></i>
            <div class="media-body">
                <h5 class="mt-0 mb-1">Health Benefits</h5>
                Comprehensive health benefits to ensure you and your family stay healthy.
            </div>
        </li>
        <li class="media my-4">
            <i class="fas fa-check-circle mr-3 fa-2x text-success"></i>
            <div class="media-body">
                <h5 class="mt-0 mb-1">Professional Growth</h5>
                Opportunities for professional growth and career advancement.
            </div>
        </li>
    </ul>

    <h3 class="mt-5">Apply Now</h3>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form class="mt-4" method="POST" action="{{ route('join-us.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Your Phone Number" required>
        </div>
        <div class="form-group">
            <label for="inputPosition">Position</label>
            <input type="text" class="form-control" id="inputPosition" name="position" placeholder="Position You Are Applying For" required>
        </div>
        <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" name="message" rows="4" placeholder="Tell us why you want to join our team" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit Application</button>
    </form>
</div>
@endsection
