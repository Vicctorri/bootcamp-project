
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          @guest
{{--              @if (Route::has('login'))--}}
{{--                  <li class="nav-item">--}}
{{--                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                  </li>--}}
{{--              @endif--}}

{{--              @if (Route::has('register'))--}}
{{--                  <li class="nav-item">--}}
{{--                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                  </li>--}}
{{--              @endif--}}
          @else
              <li class="nav-item dropdown" style="list-style: none;">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest

      </div>
    </nav>
  </header>
