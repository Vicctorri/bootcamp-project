@extends('layout')

@section('content')

<div class="container-fluid gradient">
      <div class="container">
          <div>
              <h2 class="text-center shadow-sm fw-bold  p-3 ">{{ __('contact') }}</h2>
          </div>
          <div class="row">
              <div class="col-md-7 shadow rounded p-5 bg-light">
                  <form action="{{ route('contact.send')}}" method="POST" name="contact-form">
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label" >{{ __('firstname') }}</label>
                          <input type="text" value="{{ old('firstname') }}" class="form-control" placeholder="{{ __('firstname') }}" name="firstname">
                      </div>
                      <div class="col mb-3">
                          <label class="form-label" >{{ __('lastname') }}</label>
                          <input type="text" value="{{ old('lastname') }}" class="form-control" placeholder="{{ __('lastname') }}" name="lastname">
                      </div>
                  </div>
                  <div class="mb-3">
                          <label class="form-label" >{{ __('email') }}</label>
                          <input type="email" value="{{ old('email') }}" class="form-control" placeholder="{{ __('lastname') }}@gmail.com" name="email">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >{{ __('phone') }}</label>
                      <input type="tel" value="{{ old('phonenumber') }}" class="form-control" placeholder="+37360000000" name="phonenumber">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">{{ __('subject') }}</label>
                      <select id="subject" class="form-control" name="subject">
                        <option value="">{{ __('subjecttext') }}</option>
                        <option value="education" >{{ __('s1') }}</option>
                        <option value="computers" >{{ __('s2') }}</option>
                        <option value="business" >{{ __('s3') }}</option>
                        <option value="science" >{{ __('s4') }}</option>
                        <option value="social" >{{ __('s5') }}</option>
                    </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">{{ __('message') }}</label>
                      <textarea type="text" class="form-control" placeholder="{{ __('messagetext') }}" rows="4" name="message">{{ old('message')}}</textarea>
                  </div>
                  @csrf
                  <button type="submit" class="btn btn1 ">{{ __('submit') }}</button>
              </div>
              </form>

              <div class="col-md-5">
                  <div class="ml-5">
                      <div>

                          <img src="{{asset('./assets/img/library.jpg')}}" alt="..." class="img-fluid">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection
