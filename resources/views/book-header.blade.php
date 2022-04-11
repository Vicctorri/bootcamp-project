<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"   > <img class="img-logo" src="{{asset('./assets/img/li.png')}}" alt="logo"> </a>

          @auth
              <div class="col-md-7">
                  <div class="container">
                      <div class="row  d-flex justify-content-center align-items-center">
                          <div class="col-md-10">
                              <form action="{{ route('books') }}" method="GET">
                                  <div class="search">
                                      <i class="fa fa-search"></i>
                                      <input type="text" class="form-control" name="search" placeholder="Search book">
                                      <button class="btt1 btn ">Search</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="icon1 mx-5">
                  <a href="{{route('favorite')}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill mx-3" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                      </svg></a>
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
