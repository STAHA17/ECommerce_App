<!-- resources/views/contact.blade.php -->
@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">We'd love to hear from you! Please fill out the form below to get in touch with us.</p>
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
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" rows="4" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
