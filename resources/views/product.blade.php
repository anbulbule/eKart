@extends('layout')
@section('content')
    <div class="container-fluid mt-5 mb-16">
        <div id="carouselExampleIndicators" class="carousel slide mb-4 d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($product as $item )
                <div class="carousel-item h-80 bg-gray-400 {{ $item->id == 1? 'active':'' }}">
                    <a href="detail/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" class=" h-80">
                    <div class="carousel-caption text-gray-800">
                        <h3 class="font-bold text-4xl">{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


    {{-- Trending products --}}
    <div class="">
        <h3 class="text-center mb-5 text-3xl font-serif">Trending Products</h3>
        <div class="flex">
            @foreach ($product as $item )
                <div class="mx-5">
                    <a href="detail/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" class="h-32 mb-3 ">
                        <h3 class="">{{ $item->name }}</h3>
                    </a>
                </div>
        @endforeach
        </div>
    </div>
</div>

@endsection