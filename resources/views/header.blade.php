<nav class="navbar bg-dark  navbar-expand-lg bg-light">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="#">Navbar</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      {{-- navbar collapse content --}}
      <div class="navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Orders</a>
          </li>
            <li class="mx-3">
                <form class="d-flex text-white" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
        </ul>
        <div class="mx-5 text-white">
            <a href="" class="fs-4"><span><i class="fa-solid fa-cart-shopping"></i><sup>3</sup></span></a>
        </div>
      </div>
    </div>
  </nav>