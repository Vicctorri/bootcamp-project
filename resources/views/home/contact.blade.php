@extends('layout')

@section('content')

<div class="container-fluid gradient">
      <div class="container">
          <div class="contact-page "> 
              <h2 class="text-center shadow-sm fw-bold  p-3 ">Contact</h2>
          </div>
          <div class="row">
              <div class="col-md-7 shadow rounded p-5 bg-light">
                  <form action="{{ route('contact.send')}}" method="POST" name="contact-form">
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label" >First Name</label>
                          <input type="text" value="{{ old('firstname') }}" class="form-control" placeholder="First Name" name="firstname">
                      </div>
                      <div class="col mb-3">
                          <label class="form-label" >Last Name</label>
                          <input type="text" value="{{ old('lastname') }}" class="form-control" placeholder="Last Name" name="lastname">
                      </div>
                  </div>
                  <div class="mb-3">
                          <label class="form-label" >Email</label>
                          <input type="email" value="{{ old('email') }}" class="form-control" placeholder="name@gmail.com" name="email">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >Phone Number</label>
                      <input type="tel" value="{{ old('phonenumber') }}" class="form-control" placeholder="+37360000000" name="phonenumber">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >Subjet</label>
                      <select id="subject" class="form-control" name="subject">
                        <option value="">Select the subject</option>
                        <option value="education" >Education</option>
                        <option value="computers" >Computers</option>
                        <option value="business" >Business</option>
                        <option value="science" >Science & Technology</option>
                        <option value="social" >Social Sciences</option>
                        <option value="study" >Study Aids & Test Prep</option>
                    </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >Message</label>
                      <textarea type="text" class="form-control" placeholder="Write your message" rows="4" name="message">{{ old('message')}}</textarea>
                  </div>
                  @csrf
                  <button type="submit" class="btn btn1 ">Submit</button>
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