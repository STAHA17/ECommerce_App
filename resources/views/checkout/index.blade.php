<!-- resources/views/checkout/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    <div class="container mt-5">
        <h1 class="text-center">Checkout</h1>
        @if(session('cart'))
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-group">
                        @foreach(session('cart') as $cartItem)
                            <li class="list-group-item">
                                <img src="{{ asset('images/' . $cartItem['product']->image) }}" alt="{{ $cartItem['product']->name }}" style="width: 50px;">
                                {{ $cartItem['product']->name }} - ${{ $cartItem['product']->price }} x {{ $cartItem['quantity'] }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Total: ${{ collect(session('cart'))->sum(function($cartItem) { return $cartItem['product']->price * $cartItem['quantity']; }) }}</h2>
                    <a href="#" class="btn btn-success">Proceed to Payment</a>
                </div>
            </div>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
