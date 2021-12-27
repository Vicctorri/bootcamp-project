<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="well blog">
    <a href="{{route('blogArticle', ['id'=> $article -> id ]) }}">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="image">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{ $article->title }}">
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="blog-details">
                <h2>{{ $article->title }}</h2>
                <p>{{$article->excerpt}}</p>
                <small class="text-muted">{{$article -> published_at}}</small> 
             </div>
          </div>
        </div>
    </a>
  </div>
</div>


