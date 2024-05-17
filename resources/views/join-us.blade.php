<!-- resources/views/join-us.blade.php -->
@extends('layout')

@section('title', 'Join Us')

@section('content')
    <h1>Join Our Team</h1>
    <p>Information on why to join and the application process...</p>

    <h3>Benefits of Working with Us</h3>
    <ul>
        <li>Benefit 1</li>
        <li>Benefit 2</li>
        <li>Benefit 3</li>
        <!-- Add more benefits as needed -->
    </ul>

    <h3>Apply Now</h3>
    <form>
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
        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>
@endsection
