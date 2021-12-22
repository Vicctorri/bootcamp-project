@extends('layout')

@section('content')
<div class="container-fluid gradient">
    <div class="container" style="margin-top:130px; " >
    <section  class="Form  my-4 mx-5 pt-5"> 
        <div class="container">
            <div class="row no-gutters " style="background-color: white; border-radius: 10px; box-shadow: 12px 12px 12px;" >
                <div class="col-lg-5 p-0">
                    <img src="{{asset('./assets/img/book5.jpg')}}" class="img-fluid mx-0" >
                </div>
                <div class="form-login col-lg-7 px-5 pt-3 mt-5">
                    <img src="{{asset('./assets/img/li.png')}}" alt="">
                    <h4>Sign into your account</h4>
                    <form >
                        <input type="email" placeholder="Email-Address" class="form-control my-5 p-4">
                        <input type="pasword" placeholder="******" class="form-control my-3 p-4">
                        <button type="button" class="btn1 mt-3  mb-5" >Login</button>
                        <p>D'ont have an account? <a href="{{route('register')}}">Register here</a> </p>
                    </form>
                </div>
                </div>
            </div>
        </section> 
    </div>

      


@endsection