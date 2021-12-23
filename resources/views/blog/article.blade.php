<div class="col-4">
    <div class="book-card">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{ $article->title }}">
                  <div class="card-body">
                    <h4 class="card-title fw-bold ">{{ $article->title }}</h4>
                    <p class="card-text">{{$article->excerpt}}</p>
                    <a href="{{route('blogArticle', ['id'=> $article -> id ]) }}" 
                    class="btt1 btn">View</a>
                  </div>
                  <small class="text-muted">{{$article -> published_at}}</small>
                </div>
              </div>
               