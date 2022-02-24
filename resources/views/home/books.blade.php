@extends('book-layout')
@section('content')
<main>
    <div class="category">
      <div class="container pt-5 mt-5">
        <div class="row">
          <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="news.html" class="btn button-blog btn-outline-light fw-bold ">News</a>
            <a href="{{route('blog')}}" class="btn button-blog btn-outline-light fw-bold ">Blog</a>
            <a href="{{route('useful_advice')}}" class="btn button-blog btn-outline-light fw-bold ">Useful Advice</a></div>
          <div class="col-md-3 mt-5">
            <div class="card">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Categories
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        @foreach($categories as $category)
                          <form>
                            <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label">
                                {{$category->name}}
                              </span>
                            </label>
                          </form>
                        @endforeach
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      Availability
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      <div class="filter-content">
                        <div class="card-body">
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadio" value="">
                          <span class="form-check-label">
                            Unavailable
                          </span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadio" value="">
                          <span class="form-check-label">
                            Available
                          </span>
                        </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      Authors
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        @foreach($authors as $author)
                            <form>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label">
                                {{$author->author}}
                              </span>
                                </label>
                            </form>
                        @endforeach
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                      Edition
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                        @foreach($editions as $edition)
                            <form>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label">
                                {{$edition->edition}}
                              </span>
                                </label>
                            </form>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btt1 button-blog mt-3 mx-5 mb-5" style="width: 180px;">Filter</button>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach($books as $book)
                        <div class="col-4">
                            <div class="book-card">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($book->img) }}" class="card-img-top mx-4" alt="{{ $book->title }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{$book->title}}</h4>
                                    <p class="card-text">{{$book->author}}</p>
                                    <a href="{{route('book_page', ['id'=>$book->id])}}" class="btt1 btn ">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-3">{{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


@endsection
