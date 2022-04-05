@extends('book-layout')
@section('content')
<main>
      <svg width="0" height="0">
        <defs>
          <path id="heart" d="M100 34.976c0 8.434-3.635 16.019-9.423 21.274h0.048l-31.25 31.25c-3.125 3.125-6.25 6.25-9.375 6.25s-6.25-3.125-9.375-6.25l-31.202-31.25c-5.788-5.255-9.423-12.84-9.423-21.274 0-15.865 12.861-28.726 28.726-28.726 8.434 0 16.019 3.635 21.274 9.423 5.255-5.788 12.84-9.423 21.274-9.423 15.865 0 28.726 12.861 28.726 28.726z"/>
          <g>
            <filter id="shadow" filterUnits="userSpaceOnUse" x="0" y="0"
                    width="300" height="300">
              <feGaussianBlur in="SourceAlpha" stdDeviation="2" result="blur"/>
              <feOffset in="blur" dx="0" dy="0" result="offsetBlr" />
              <feFlood flood-color="rgba(0,0,0,.6)"/>
              <feComposite operator="in" in2="offsetBlr" result="colBlur"/>
              <feMerge>
                <feMergeNode in="colBlur"/>
                <feMergeNode in="SourceGraphic"/>
              </feMerge>
            </filter>
          </g>
        </defs>
      </svg>

      <div class="book-page row product-details ">
          <div class="col-md-2">

          </div>
          <div class="img-book col-sm-6 col-xs-12 ">
              <img src="{{ \Illuminate\Support\Facades\Storage::url($book->img) }}" class="img-book-page img-fluid" alt="{{$book->title}}">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
            <div class="book-info " >
                <h1>{{$book->title}}</h1>
                <p>{{$book->authors[0]->name}} {{$book->authors[0]->surname}}</p>
                <div class="bg-gray-100 shadow-sm">
                    <p>{{$book->description}}</p>
                </div>
                <a href="#readbook">
                    <button class="add-cart btn btt1 mt-5" >READ</button>
                </a>
            </div>
            <a class="favorite" href="#">
              <span class="icon mt-5">
                <svg viewbox="0 0 110 110">
                  <use xlink:href="#heart"/>
                </svg>
              </span>
              Favorites
            </a>

          </div>
          <div class="container">
              <div class="text3">
                <table class="table table-striped">
                    <thead>
                      <tr>
                          <th id="BookDetails" class="mx-5 px-5">Details </th>
                          <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Title</th>
                            <td>{{$book->title}}</td>
                        </tr>
                      <tr>
                        <th scope="row">Author</th>
                        <td>{{$book->authors[0]->name}} {{$book->authors[0]->surname}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Edition</th>
                        <td>{{$book->edition}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Number of pages</th>
                        <td>{{$book->page_count}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Volume</th>
                        <td>{{$book->volume}}</td>
                      </tr>
                    </tbody>
                  </table>
                        <div>
                          <embed id="readbook" src="{{asset('./assets/img/21-Lessons-Teacher-Resource.pdf')}}" width="100%" height="1060px">
                        </div>
              </div>
          </div>
      </div>
    </main>
    @endsection
