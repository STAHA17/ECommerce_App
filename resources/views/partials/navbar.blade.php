<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="fas fa-store"></i> E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">ABOUT US</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">SERVICES</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/how-we-work') }}">HOW WE WORK</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/join-us') }}">JOIN US</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/available-jobs') }}">AVAILABLE JOBS</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">CONTACT US</a></li>
            <!-- <li class="nav-item"><a class="btn btn-primary" href="{{ url('/mainpage') }}" role="button">Main Page</a></li> -->
        </ul>
    </div>
</nav>
