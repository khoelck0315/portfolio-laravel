<nav class="navbar navbar-expand-sm sticky-top bg-body-secondary" data-bs-theme="light">
  <div class="container-fluid d-flex justify-content-lg-evenly">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-sm-5" id="navLinks">
      <ul class="navbar-nav mb-2 mb-lg-0 fs-4">
        <li class="nav-item">
          <!--Add onclick logic to make active since it's an in page link-->
          <a class="nav-link" aria-current="page" href="{{ route("home") }}">Home</a>
        </li>
        <li class="nav-item">
          <!--Add onclick logic to make active since it's an in page link-->
          <a class="nav-link" aria-current="page" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("contact") }}">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utilities
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Subnet Calculator</a></li>
            <li><a class="dropdown-item" href="#">Base64 Decoder</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>