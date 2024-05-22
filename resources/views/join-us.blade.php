<!-- resources/views/join-us.blade.php -->
@extends('layout')

@section('title', 'Join Us')

@section('content')
<div class="container mt-5">
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
        <!-- Add more benefits as needed -->
    </ul>

    <h3 class="mt-5">Apply Now</h3>
    <form class="mt-4">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Your Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input type="text" class="form-control" id="inputPhone" placeholder="Your Phone Number">
        </div>
        <div class="form-group">
            <label for="inputPosition">Position</label>
            <input type="text" class="form-control" id="inputPosition" placeholder="Position You Are Applying For">
        </div>
        <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" rows="4" placeholder="Tell us why you want to join our team"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit Application</button>
    </form>
</div>
@endsection
