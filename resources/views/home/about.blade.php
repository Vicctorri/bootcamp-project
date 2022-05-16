@extends('layout')

@section('content')
</div>
        <div class="container">
            <div class="col-md-12">
                <div class="hero-image mt-0 pt-0" >
                    <div class="hero-text pt-5">
                      <h1>{{ __('about') }}ViLibrary</h1>
                    </div>
                  </div>
            </div>

            <div class="row mx-5 pt-4">
                <div class="col-md-8 ">
                    <p class="text-center">{{ __('abouttitle') }}</p>
                    <p>{{ __('about1') }}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('./assets/img/svg1.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-md-12 shadow mt-5 mb-5">
                <p class="px-5">{{ __('about2') }}</p>
            </div>

            <div class="row mx-5 pt-4">
                <div class="col-md-4">
                    <img src="{{asset('./assets/img/Book Lover_Outline.svg')}}" alt="">
                </div>
                <div class="col-md-8 ">
                    <p class="px-5 pb-5">{{ __('about3') }}</p>
                </div>

            </div>
          </div>

@endsection
