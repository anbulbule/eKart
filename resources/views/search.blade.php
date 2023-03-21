@extends('layout')
@section('content')
<div class="row mt-5 mb-16">
    <h2 class="text-3xl text-center mb-4">Results for searching</h2>
    <div class="text-2xl px-5 col-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-8 ">
        <div class="flex ">
            @foreach ($search as $item )
                <div class="px-5">
                    <a href="detail/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" class="h-32 mb-3 ">
                        <h3 class="text-xl fw-bold ">{{ $item->name }}</h3>
                        <h3 class="">{{ $item->description }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection