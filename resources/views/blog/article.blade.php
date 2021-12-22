<div class="col-4">
    <div class="book-card">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{ $article->title }}">
                  <div class="card-body">
                    <h4 class="card-title fw-bold ">Veronika decides to die</h4>
                    <p class="card-text">{{$article->excerpt}}</p>
                    <a href="{{route('blogArticle', ['id'=> $article -> id ]) }}" 
                    class="btt1 btn">Goo</a>
                  </div>
                </div>
              </div>
               