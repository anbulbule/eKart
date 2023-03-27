@php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartCount();
}
@endphp

<div class="container-fluid bg-dark">
  <div class="row p-2">
    <div class="col">
      <div class="d-flex align-items-center">
        <span>
          <a class="navbar-brand text-2xl text-white" href="/">eKart</a>
        </span>
        <span class="ml-5">
          <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
        </span>
        <span class="ml-5">
          <a class="nav-link text-white" href="/myorders">Orders</a>
        </span>
        <span class="ml-5">
          <form action="search" class="d-flex text-white" role="search">
            <input class="form-control rounded me-2" name="search" value="" type="text" placeholder="Search" aria-label="Search">
            <button class="text-white btn btn-outline-success" type="submit">Search</button>
          </form>
        </span>
        <div class="col d-flex justify-end d-flex align-items-center">
          <div class="mx-3 text-white">
            <a href="/cartlist" class="fs-5"><span>Cart <i class="fa-solid fa-cart-shopping"></i><sup> {{ $total }}</sup></span></a>
          </div>
          @if (session('user'))
          <ul class="navbar-nav mr-12 ">
            <li class="nav-item dropdown text-xl">
              <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ session('user')['name'] }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          @else
          <div class="mx-5 text-white">
            <a href="/login" class="fs-5">Login</a>
            <a href="/register" class="fs-5 ml-4">Register</a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>