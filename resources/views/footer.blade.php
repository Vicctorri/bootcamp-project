<footer class="gradient text-center text-lg-start bg-light text-muted"  >
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      </section>
      <section style="font-size: 20px; color: white;">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>ViLybrary
              </h6>
              <p>{{ __('about_text1') }}</p>
              </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                  {{ __('pages') }}
              </h6>
              <p>
                <a href="{{ route('home') }}" class="text-reset">{{ __('home') }}</a>
              </p>
              <p>
                <a href="{{ route('about') }}" class="text-reset">{{ __('about') }}</a>
              </p>
              <p>
                <a href="{{ route('contact') }}" class="text-reset">{{ __('contact') }}</a>
              </p>
              <p>
                <a href="{{route('books')}}" class="text-reset">{{ __('books') }}</a>
              </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                  {{ __('useful') }}
              </h6>
              <p>
                <a href="{{ route('login') }}" class="text-reset">{{ __('login') }}</a>
              </p>
              <p>
                <a href="{{ route('register') }}" class="text-reset">{{ __('register') }}</a>
              </p>
              <p>
            </div>
        </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color: white;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.html">ViLibrary</a>
      </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"></script>
<script src="/assets/cart.js"></script>
<script src="/assets/js/app.js"></script>
<script src="/assets/blog/js/blog.js"></script>

