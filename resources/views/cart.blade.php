@extends('layout')

@section('title', 'Your Cart')

@section('content')
    <div class="container mt-5">
        <h1>Your Cart</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                @if($cartItems->isEmpty())
                    <p>Your cart is empty.</p>
                @else
                    <ul class="list-group mb-4">
                        @foreach($cartItems as $item)
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>{{ $item->product->name }}</h5>
                                        <p>Quantity: {{ $item->quantity }}</p>
                                    </div>
                                    <div>
                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
