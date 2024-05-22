<!-- resources/views/services.blade.php -->
@extends('layout')

@section('title', 'Services')

@section('content')
<div class="container ">
    <h1 class="text-center mb-4">Our Services</h1>
    <p class="text-center">We offer a wide range of services to meet your needs. Below is a list of the key services we provide.</p>
    
    <div class="row">
        <!-- Service 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Service 1">
                <div class="card-body">
                    <h5 class="card-title">Service 1</h5>
                    <p class="card-text">A brief description of Service 1. This service includes features and benefits that provide value to our customers.</p>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Service 2">
                <div class="card-body">
                    <h5 class="card-title">Service 2</h5>
                    <p class="card-text">A brief description of Service 2. Highlight what makes this service special and why customers should consider it.</p>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Service 3">
                <div class="card-body">
                    <h5 class="card-title">Service 3</h5>
                    <p class="card-text">A brief description of Service 3. Include any unique features or advantages that make this service stand out.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Service 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Service 4">
                <div class="card-body">
                    <h5 class="card-title">Service 4</h5>
                    <p class="card-text">A brief description of Service 4. Emphasize the benefits and positive outcomes customers can expect from this service.</p>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Service 5">
                <div class="card-body">
                    <h5 class="card-title">Service 5</h5>
                    <p class="card-text">A brief description of Service 5. Describe how this service can solve problems or improve the customer's situation.</p>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Service 6">
                <div class="card-body">
                    <h5 class="card-title">Service 6</h5>
                    <p class="card-text">A brief description of Service 6. Highlight the key features and any special offers related to this service.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
