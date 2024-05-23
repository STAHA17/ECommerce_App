<!-- resources/views/contact.blade.php -->
@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h1 class="text-center">Contact Us</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <p class="text-center">We'd love to hear from you! Please fill out the form below to get in touch with us.</p>
    <form action="{{ route('contact.submit') }}" method="POST">
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
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Your Phone Number">
        </div>
        <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
