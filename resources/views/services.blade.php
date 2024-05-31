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
                <img src="{{ asset('images/service1.jpg') }}" class="card-img-top" alt="Service 1">
                <div class="card-body">
                    <h5 class="card-title">Technology</h5>
                    <p class="card-text">Leverage cutting-edge technology solutions to streamline your operations and enhance productivity. Our tech services ensure your business stays ahead in the digital age.</p>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/service2.jpg') }}" class="card-img-top" alt="Service 2">
                <div class="card-body">
                    <h5 class="card-title">Business</h5>
                    <p class="card-text">Optimize your business strategies with our expert consulting services. We provide insights and solutions to drive growth and efficiency in your organization.</p>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/service3.jpg') }}" class="card-img-top" alt="Service 3">
                <div class="card-body">
                    <h5 class="card-title">Support</h5>
                    <p class="card-text">Experience unparalleled customer support with our dedicated service team. We're here to help you with any issues, ensuring smooth and uninterrupted operations.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Service 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/service6.jpg') }}" class="card-img-top" alt="Service 4">
                <div class="card-body">
                    <h5 class="card-title">Analytics</h5>
                    <p class="card-text">Unlock the power of data with our comprehensive analytics services. Gain actionable insights to make informed decisions and drive business success.</p>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/service5.jpg') }}" class="card-img-top" alt="Service 5">
                <div class="card-body">
                    <h5 class="card-title">Problem Solving</h5>
                    <p class="card-text">Tackle complex challenges with our innovative problem-solving services. We provide practical solutions to improve your processes and outcomes.</p>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/service9.jpg') }}" class="card-img-top" alt="Service 6">
                <div class="card-body">
                    <h5 class="card-title">Offers</h5>
                    <p class="card-text">Take advantage of our exclusive offers and special deals. Enhance your business capabilities with our cost-effective and valuable service packages.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
