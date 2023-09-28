<nav class="navbar navbar-expand-sm sticky-top bg-body-secondary" data-bs-theme="light">
  <div class="container-fluid d-flex justify-content-lg-evenly">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-sm-5" id="navLinks">
      <ul class="navbar-nav mb-2 mb-lg-0 fs-4">
        <li class="nav-item">
          <a @class([
              'nav-link',
              'focus' => ($page == "home"),
             ])
            aria-current="page"
            href="
              @if($page == "home" || $page == "about")
                {{ "#" }}
              @else
                {{ route("home") }}
              @endif
            "
          >Home</a>
        </li>
        <li class="nav-item">
          <a @class([
              'nav-link',
              'focus' => ($page == "about"),
             ])
            aria-current="page"
            href="
              @if($page == "home" || $page == "about")
                {{ "#about" }}
              @else
                {{ route("about") }}
              @endif
            "
          >About</a>
        </li>
        <li class="nav-item">
          <a @class([
            'nav-link',
            'focus' => ($page == "portfolio"),
          ]) href="/portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a @class([
            'nav-link',
            'focus' => ($page == "contact"),
          ]) href="/contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a @class([
            'nav-link',
            'focus' => ($page == "utility"),
          ]) href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utilities
          </a>
          <ul class="dropdown-menu">
            <!--<li><a class="dropdown-item" href="#">Subnet Calculator</a></li>-->
            <li><a class="dropdown-item" href="/utilities/markdown">Markdown Preview Editor</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item disabled" href="#">More Coming Soon!</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
@vite(['resources/js/navbar.js'])