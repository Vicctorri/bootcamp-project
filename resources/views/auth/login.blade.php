@extends('layout')

@section('content')
    <div class="container-fluid gradient">
        <div class="container"  >
            <section  class="Form   mx-5 pt-5">
                <div class="container">
                    <div class="row no-gutters " style="background-color: white; border-radius: 10px; box-shadow: 12px 12px 12px;" >
                        <div class="col-lg-5 p-0">
                            <img src="{{asset('./assets/img/book5.jpg')}}" class="img-fluid mx-0"  alt="book5">
                        </div>
                        <div class="form-login col-lg-7 px-5 pt-3 mt-5">
                            <img src="{{asset('./assets/img/li.png')}}" alt="">
                            <h4>Sign into your account</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3 pt-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit"  class="btn1 mt-3  mb-5">
                                            {{ __('Login') }}
                                        </button>
                                        <p>D'ont have an account? <a href="{{route('register')}}">Register here</a> </p>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>




@endsection

