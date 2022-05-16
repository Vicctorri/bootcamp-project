@extends('layout')
@section('content')

    <main>
    <div class="page-header gradient">
      <div class="container">
          <div class="row align-items-center ">
              <div class="col-md-7 ">
                  <h1 class="my-2 fw-bold text-center">{{ __('title') }}</h1>
                  <p>{{ __('p1') }}</p>
                    <p>{{ __('p2') }}</p>
                      <a href="{{route('login')}}" class="btn btn-outline-primary p-3 mb-md-5 fw-bold">{{ __('sign') }}</a>
                </div>
              <div class="col-md-4 pt-5 rounded float-end align-content-right img-fluid mt-5 pl-5" >
                <img  class="img1"  src="{{asset('./assets/img/book4.jpg')}}"  alt="header img">

              </div>
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 320"><path fill="#fff"
      fill-opacity="1"
      d="M0,256L48,261.3C96,267,192,277,288,282.7C384,288,480,288,576,250.7C672,213,768,
      139,864,133.3C960,128,1056,192,1152,229.3C1248,267,1344,277,1392,282.7L1440,288L1440,
      320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,
      320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </div>
  <section class="companies">
    <h3 class="my-2 fw-bold text-center mb-5">{{ __('partnership') }}</h3>
    <div class="container text-center">
      <div class="row g-5">
        <div class="col-md-2"><img src="{{asset('./assets/img/1.png')}}" alt="Company logo" class="img-fluid"></div>
        <div class="col-md-2"><img src="{{asset('./assets/img/2.jpg')}}" alt="Company logo" class="img-fluid"></div>
        <div class="col-md-2"><img src="{{asset('./assets/img/3.png')}}" alt="Company logo" class="img-fluid"></div>
        <div class="col-md-2"><img src="{{asset('./assets/img/4.png')}}" alt="Company logo" class="img-fluid"></div>
        <div class="col-md-2"><img src="{{asset('./assets/img/5.png')}}" alt="Company logo" class="img-fluid"></div>
        <div class="col-md-2"><img src="{{asset('./assets/img/6.jpg')}}" alt="Company logo" class="img-fluid"></div>
      </div>
    </div>

  </section>
  <section class="feature gradient">
    <svg xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,106.7C384,107,480,149,576,154.7C672,160,768,128,864,112C960,96,1056,96,1152,101.3C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner img2">
              <div class="carousel-item active">
                <img src="{{asset('./assets/img/book1.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" >
                <img src="{{asset('./assets/img/book3.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('./assets/img/library3.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('./assets/img/library6.webp')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('./assets/img/library7.webp')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('./assets/img/l.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
        <div class="about-index col shadow-sm pb-1">
          <h1 class="ali mx-lg-4 fw-bold text-center">{{ __('about') }}</h1>
          <p id="about"  class="my-4">{{ __('about_text1') }}</p>
          <p>{{ __('about_text2') }}</p>
            <a href="{{route('about')}}" class="btn btn-outline-secondary btn"> {{ __('more') }}...</a>
        </div>

      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 1440 320"><path fill="#fff"
    fill-opacity="1" d="M0,256L48,266.7C96,277,192,299,288,293.3C384,288,480,256,576,224C672,192,768,160,864,154.7C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</section>
  <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 class="text-center fw-bold mt-5 mb-5">{{ __('contact') }}</h2>
            </div>
        </div>
            <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd_circle">
                    <svg xmlns="http://www.w3.org/2000/svg"
                    width="26" height="26" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                    <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                  </svg>
                </div>
                    <h5 class="text-center">+37361118155</h5>
                    <div class="line">
                    </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd_circle"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                </div>
                    <h5 class="text-center">0222005233</h5>
                    <div class="line">
                    </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
              <div class="itd_circle"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                </svg>
              </div>
                  <h5 class="text-center">library@gmail.com</h5>
                  <div class="line">
                  </div>
          </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-md-5">
                <div class="itd_circle"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
                </div>
                    <h5 class="text-center">ViLibrary</h5>
                    <div class="line">
                    </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd_circle"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
                </div>
                    <h5 class="text-center">ViLibrary</h5>
                    <div class="line">
                    </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
              <div class="itd_circle"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                </svg>
              </div>
                  <h5 class="text-center">Chișinău, Moldova</h5>
                  <div class="line">
                  </div>
          </div>
            </div>
            </div>
            </section>
        </div>
  </main>


</body>

@endsection
