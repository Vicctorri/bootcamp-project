@extends('book-layout')
@section('content')   
<main>
    <div class="category gradient">
      <div class="container pt-5 mt-5">
        <div class="row">
          <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="news.html" class="btn button-blog btn-outline-light fw-bold ">News</a>
            <a href="{{route('blog')}}" class="btn button-blog btn-outline-light fw-bold active">Blog</a>
            <a href="{{route('useful_advice')}}" class="btn button-blog btn-outline-light fw-bold ">Useful Advice</a>
        </div>
        </div> 
        <div class="container bootstrap snippets bootdey">
          <hr>
            @foreach($articles as $article)
              <div class="col">
                @include('blog.article', ['article => $article'])
              </div>
            @endforeach
            <div class="mt-5">
            {{ $articles->links() }}
            </div>   
          </div>
        </div> 
      </div>
   </div>
</main>
@endsection