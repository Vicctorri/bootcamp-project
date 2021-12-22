<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"   > <img class="img-logo" src="{{asset('./assets/img/li.png')}}" alt="logo"> </a>
        
      
        <div class="col-md-7">
          <div class="container">
            <div class="row  d-flex justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="search"> 
                      <i class="fa fa-search"></i> 
                      <input type="text" class="form-control" placeholder="Search book"> 
                      <button class="btt1 btn ">Search</button> </div>
                </div>
            </div>
        </div>
        </div>
        <div class="lang-menu">
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
        <div class="icon1 mx-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle mx-3" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill mx-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-fill  mx-3" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
          </svg>
      </div>
    </div>
    </nav>
  </header>