@extends('book-layout')
@section('content')
<main>
    <div class="category">
      <div class="container pt-5 mt-5">
        <div class="row">
          <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="news.html" class="btn button-blog btn-outline-light fw-bold ">News</a>
            <a href="blog.html" class="btn button-blog btn-outline-light fw-bold ">Blog</a>
            <a href="useful-advice.html" class="btn button-blog btn-outline-light fw-bold ">Useful Advice</a></div>
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
                      
                      <form>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Autobiography
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Business/economics
                          </span>
                        </label>  
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Dictionary
                          </span>
                        </label>  
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Health/fitness
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Philosophy
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Science
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Young adult
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Romance
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Math
                          </span>
                        </label> 
                      </form>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-label">
                          Romance
                        </span>
                      </label> 
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-label">
                          Math
                        </span>
                      </label> 
                    </form>
                    <label class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-label">
                        Romance
                      </span>
                    </label> 
                    <label class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-label">
                        Math
                      </span>
                    </label> 
                  </form>

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
                      <form>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Osho
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Paulo Coelho
                          </span>
                        </label>  
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Bob Olson
                          </span>
                        </label>  
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Garth Stein
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                      </form>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                      Other
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                      <form>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Osho
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Paulo Coelho
                          </span>
                        </label>  
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Bob Olson
                          </span>
                        </label>  
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Garth Stein
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-label">
                            Juan Arias
                          </span>
                        </label> 
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <button class="btt1 button-blog mt-3 mx-5" style="width: 180px;">Filter</button>
            </div>

            <div class="col-md-9">
              <div class="row">
              @foreach($articles as $article)
                  <div class="col">
                  @include('blog.article', ['article => $article'])
                  </div>
                @endforeach
              </div>
              <div class="mt-5">
              {{ $articles->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
            

@endsection