@extends('layout')
@section('content')
<div class="category">
      <div class="container pt-5 mt-5">
        <div class="row">
          <div class="col-md-3">
           
            <div class="card">
              <article class="card-group-item">
                <header class="card-header">
                  <h6 class="title">Categories </h6>
                </header>
                <div class="filter-content">
                  <div class="card-body">
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
              </article> 
              
              <article class="card-group-item">
                <header class="card-header">
                  <h6 class="title">Availability</h6>
                </header>
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
              </article> 

              <div class="card">
                <article class="card-group-item">
                  <header class="card-header">
                    <h6 class="title">Authors</h6>
                  </header>
                  <div class="filter-content">
                    <div class="card-body">
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
                </article> 
            </div> 
            </div>
          </div>
          <div class="col-md-9">
            <div class="container">
              <div class="row  d-flex justify-content-center align-items-center">
                  <div class="col-md-8">
                      <div class="search"> 
                        <i class="fa fa-search"></i> 
                        <input type="text" class="form-control" placeholder="Search book"> 
                        <button class="btt1 btn ">Search</button> </div>
                  </div>
              </div>
          </div>
            <div class="row">
             

             @foreach($articles as $article)
                <div class="col">
                @include('blog.article', ['article => $article'])
                </div>
              @endforeach

              <div class="col-4">
                <div class="book-card">
                  <img src="img/b2.jpg" class="card-img-top mx-4" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Atomic Habits</h4>
                    <p class="card-text">James Clear</p>
                    <a href="#" class="btt1 btn">Goo</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="book-card">
                  <img src="img/b1.jpg" class="card-img-top mx-4" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Habits of a Happy Brain</h4>
                    <p class="card-text">Loretta Graziano Breuning</p>
                    <a href="#" class="btt1 btn ">Goo</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="book-card">
                  <img src="img/b.jpg" class="card-img-top mx-4" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Veronika decides to die</h4>
                    <p class="card-text">Paulo Coelho</p>
                    <a href="#" class="btt1 btn ">Goo</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="book-card">
                  <img src="img/b.jpg" class="card-img-top mx-4" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Veronika decides to die</h4>
                    <p class="card-text">Paulo Coelho</p>
                    <a href="#" class="btt1 btn ">Goo</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="book-card">
                  <img src="img/b.jpg" class="card-img-top mx-4" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Veronika decides to die</h4>
                    <p class="card-text">Paulo Coelho</p>
                    <a href="#" class="btt1 btn">Goo</a>
                  </div>
                </div>
              </div>
            </div>
            <nav aria-label="...">
              <ul class="pagination d-flex justify-content-center align-items-center">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
@endsection