@extends('layout')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6">
                <img class="h-64" src="{{ $product->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/" class="text-primary">Go back</a>
                <div class="mt-4 text-4xl">{{ $product->name }}</div>
                <div class="mt-4 text-3xl">Price : {{ $product->price }}$</div>
                <div class="mt-4 text-2xl">Description : {{ $product->description }}</div>
                <div class="mt-2 text-2xl">Category : {{ $product->category }}</div>
                <form action="/add_to_cart" method="POST" class="d-inline mx-3">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="btn mt-4 bg-blue-500 text-white hover:bg-blue-800">Add to Cart</button>
                </form>
                <div class="mt-4 btn bg-green-600 text-white hover:bg-green-800 "><button>Buy Now</button></div>
            </div>
        </div>
    </div>
@endsection