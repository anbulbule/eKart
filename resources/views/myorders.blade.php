@extends('layout')
@section('title')
    Cart List
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center mt-3 fs-3 font-serif">My Orders</h3>
        <div class="row mt-5">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product</th>
                        <th>Product Image</th>
                        <th>order status</th>
                        <th>Payment method</th>
                        <th>Payment Status</th>
                        <th>Delivery Address</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($orders as $key => $item )
                        <tr>
                            <td class="">{{ $key+1 }}</td>
                            <td class="">{{ $item->name }}</td>
                            <td class=""><img class="h-16" src="{{ $item->gallery }}" alt=""></td>
                            <td class="">{{ $item->status }}</td>
                            <td class="">{{ $item->payment_method }}</td>
                            <td class="">{{ $item->payment_status }}</td>
                            <td class="">{{ $item->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection