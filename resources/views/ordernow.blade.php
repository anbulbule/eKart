@extends('layout')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Tax</th>
                        <th>Delivery Charges</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <td>$ {{ $total }}</td>
                    <td>$ 0</td>
                    <td>$ 10</td>
                    <td>$ {{ $total+10 }}</td>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="Enter Your address" class="form-control w-full mt-5"  id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <select name="payment" id="" class="form-control">
                            <option value="">Payment Method</option>
                            <option value="Online Payment">Online Payment</option>
                            <option value="Cash On Delivery">Cash On Delivery</option>
                            <option value="EMI">EMI</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="mt-3 px-5 btn bg-green-400 hover:bg-green-800 hover:text-white" value="Order Now">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection