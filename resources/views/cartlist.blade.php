@extends('layout')
@section('title')
    Cart List
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product</th>
                        <th>Product Image</th>
                        <th>Cart Operation</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($product as $key => $item )
                        <tr>
                            <td class="">{{ $key+1 }}</td>
                            <td class="">{{ $item->name }}</td>
                            <td><img class="w-16" src="{{ $item->gallery }}"  alt=""></td>
                            <td><a href="/removecart/{{ $item->cart_id }}" class="btn bg-red-400 hover:bg-red-800 hover:text-white">Remove Cart item</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-end mt-3">
                <span class="mr-32 fs-5">Please Click here for Order cart items </span>
                <a href="/ordernow" class="mr-96 btn btn-success">Order Now</a>
            </div>
        </div>
    </div>
@endsection