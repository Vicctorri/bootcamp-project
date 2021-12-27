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
        <div class="row m-2 rounded-lg">

          <form method="GET" action="/blog" class="row row-cols-3">
            <div class="col">
              <select  class="form-select" name="category">
                @foreach($categories as $category)
               <option value="{{ $category->id }}" 
               @if($filter['category'] === $category->id) selected @endif
               >{{ $category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col">
              <select  class="form-select" name="sort">
                <option value="DESC" @if($filter['sort'] === 'DESC') selected @endif>DESC</option>
                <option value="ASC" @if($filter['sort'] === 'ASC') selected @endif>ASC</option>
              </select>
            </div>
            <div class="col">
              <button class="btn btt1"> Apply sort</button>
            </div>
          </form>

        </div>
          <hr>
            @foreach($articles as $article)
              <div class="col">
                @include('blog.article', ['article => $article'])
              </div>
            @endforeach
            <div class="p-2 mt-5">
            {{ $articles->links() }}
            </div>   
          </div>
        </div> 
      </div>
   </div>
</main>
@endsection