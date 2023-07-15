<header class="header_section" style="background-color: #333;">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark custom_nav-container pt-3">
      <a class="navbar-brand mr-5" href="/{{route('home')}}">
        <img src="images/logo.png" alt="">
        <span>
          Laravel
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog')}}">Blog</a>
            </li>
            @if(!Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('registration')}}">Register</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
