@extends('layout')

@section('title', 'About Us')

@section('content')
    <h1 class="text-center mb-4">About Us</h1>
    
    <!-- Company Overview Section -->
    <section id="company-overview" class="mb-5">
        <h2>Company Overview</h2>
        <p>Welcome to our E-Commerce Website. We are dedicated to providing the best online shopping experience. Our platform offers a wide range of products, ensuring quality and value for our customers.</p>
    </section>

    <!-- Mission & Vision Section -->
    <section id="mission-vision" class="mb-5">
        <h2>Our Mission & Vision</h2>
        <p><strong>Mission:</strong> To deliver exceptional value and quality to our customers through a seamless online shopping experience.</p>
        <p><strong>Vision:</strong> To be the leading e-commerce platform, renowned for innovation, customer satisfaction, and social responsibility.</p>
    </section>

    <!-- Team Members Section -->
    <section id="team" class="mb-5">
        <h2>Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/Pic1.png') }}" class="rounded-circle mb-3" alt="Team Member 1">
                <h5>Taha Ali</h5>
                <p>CEO & Founder</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/Pic2.png') }}" class="rounded-circle mb-3" alt="Team Member 2">
                <h5>Jane Smith</h5>
                <p>Chief Operating Officer</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/Pic3.png') }}" class="rounded-circle mb-3" alt="Team Member 3">
                <h5>Mike Johnson</h5>
                <p>Chief Marketing Officer</p>
            </div>
        </div>
    </section>

    <!-- History Timeline Section -->
    <section id="history" class="mb-5">
        <h2>Our History</h2>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="fas fa-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Founded</h4>
                        <p><small class="text-muted"><i class="fas fa-clock"></i> 2020</small></p>
                    </div>
                    <div class="timeline-body">
                        <p>Our company was founded in 2010 with a vision to revolutionize the e-commerce industry.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"><i class="fas fa-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">First Milestone</h4>
                        <p><small class="text-muted"><i class="fas fa-clock"></i> 2022</small></p>
                    </div>
                    <div class="timeline-body">
                        <p>We reached our first major milestone, achieving 1 million customers.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><i class="fas fa-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Expansion</h4>
                        <p><small class="text-muted"><i class="fas fa-clock"></i> 2023</small></p>
                    </div>
                    <div class="timeline-body">
                        <p>We expanded our services internationally, reaching new markets across the globe.</p>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- Contact Us Call to Action -->
    <section id="contact-us" class="text-center mb-5">
        <h2>Get in Touch</h2>
        <p>If you have any questions or would like to learn more about our company, feel free to <a href="{{ url('contact') }}">contact us</a>.</p>
    </section>
@endsection
