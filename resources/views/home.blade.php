<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        .carousel-inner img {
            width: 100%;
            height: 100vh; /* Full height */
            object-fit: cover;
        }

        .no-products-card {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 0.25rem;
            padding: 1.5rem;
            text-align: center;
            margin-top: 2rem;
        }
        .no-products-card p {
            margin: 0;
            font-size: 1.2rem;
        }
    </style>

</head>
<body>
    @include('partials.navbar')
    <div class="container mt-5">
        <!-- Your content here -->
        <h1 class="text-center ">Welcome to Our E-Commerce Website</h1>
        <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/service8.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/service9.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Image8.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- <div class="container mt-5">
        <h1 class="text-center">Products</h1>
        @if(isset($products) && $products->count() > 0)
            <div class="row mt-5">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">${{ $product->price }}</p>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">${{ $product->price }}</p>
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" required>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        @else
            <div class="no-products-card">
                <p>There's some error that's why Products isn't showing. Sorry for the inconvenience.</p>
            </div>
        @endif
    </div> -->


   <!-- Product Grid -->
    <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img src="{{ asset('images/Product1.jpg') }}" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$19.99</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            <!-- 2nd -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ asset('images/Product2.jpg') }}" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div> 
            <!-- 3rd -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ asset('images/Product3.jpg') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- 4th -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ asset('images/service3.jpg') }}" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- 5th -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ asset('images/service3.jpg') }}" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- 6th -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ asset('images/service3.jpg') }}" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
