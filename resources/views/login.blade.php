@extends('layout')
@section('content')
    <div class="container pt-40">
        <div class="row grid justify-items-center">
            <div class="col-sm-4 ">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="" class="form-label text-xl">Email Id :</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div>
                        <label for="" class="form-label text-xl">Password :</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div>
                        <input type="submit" class="btn bg-blue-500 text-white hover:bg-blue-900 mt-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection