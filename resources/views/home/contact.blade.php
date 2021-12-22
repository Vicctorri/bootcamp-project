@extends('layout')

@section('content')

<div class="container-fluid gradient">
      <div class="container">
          <div class="contact-page "> 
              <h2 class="text-center shadow-sm fw-bold  p-3 ">Contact</h2>
          </div>
          <div class="row">
              <div class="col-md-7 shadow rounded p-5 bg-light">
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label" >First Name</label>
                          <input type="text" class="form-control" placeholder="First Name">
                      </div>
                      <div class="col mb-3">
                          <label class="form-label" >Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name">
                      </div>
                  </div>
                  <div class="mb-3">
                          <label class="form-label" >Email</label>
                          <input type="text" class="form-control" placeholder="name@gmail.com">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >Phone Number</label>
                      <input type="text" class="form-control" placeholder="+37360000000">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >Subjet</label>
                      <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" >Message</label>
                      <textarea type="text" class="form-control" placeholder="Write your message" rows="4"></textarea>
                  </div>
                  <button type="button" class="btn btn1 ">Submit</button>
              </div>

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