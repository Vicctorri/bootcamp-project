@extends('book-layout')
@section('content')

<div class="container">
  <div class="img-book col-sm-6 col-xs-12 ">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{$article-> title}}" class="img-book-page img-fluid ">
  </div>
  <div class="book-info " >
    <h1>{{$article-> title}}</h1>
    <p> {{$article->description}}</p> 
  </div>
  <div>
    @include('article.comment', ['comments' => $article->comments()])
  </div>
</div>

@endsection