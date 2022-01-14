
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"> <img class="img-logo" src="{{asset('./assets/img/li.png')}}" alt="logo"> </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item  @if(\Request::is('/home*') ) active  @endif">
              <a class="nav-link " aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active':'' }}">
              <a class="nav-link" href="{{ route('about')}}">About</a>
            </li>
            <li class="nav-item {{ request()->routeIs('/contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('books')}}">Books</a>
            </li>
          </ul>
        </div>
        <div class="lang-menu" style="padding-top: 40px;">
          <div class="selected-lang">
            EN
          </div>
          <ul>
            <li>
              <a> RO</a>
            </li>
            <li>
              <a> RU</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>