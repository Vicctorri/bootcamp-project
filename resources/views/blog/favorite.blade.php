@extends('book-layout')
@section('content')
<div class="container-fluid gradient">
    <div class="container" >
        <div class="row" style=" margin-top:100px;">
            <div class="col-4 pt-4">
                <div class="book-card  bg-light" style="border-radius: 7px;">
                    <img src="{{asset('./assets/img/b1.jpg')}}" class="card-img-top mt-3 mx-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Habits of a Happy Brain</h4>
                            <p class="card-text">Loretta Graziano Breuning</p>
{{--                            <a href="{{route('book_page')}}" class="btt1 btn ">View</a>--}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
