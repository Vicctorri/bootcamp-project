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
            <img src="{{asset('./assets/img/b1.jpg')}}" alt="" class="img-book-page img-fluid ">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
            <div class="book-info " >
                <h1>Loretta Graziano Breuning</h1>
                <p>Habits of a Happy Brain: Retrain Your Brain to Boost Your Serotonin, Dopamine, Oxytocin, & Endorphin Levels, Paperback - Loretta Graziano Breuning</p>
                <button class="btn btt1 mt-5" > Add to card </button>   
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
              <div class="mt-5 text1 shadow-sm">
                  <a href="#BookDescription" class="text1">Description</a>
                  <a href="#BookDetails" class="text1">Details</a>
              </div>
              <div id="BookDescription" class="details">Description</div>
              <div class="text2 shadow-sm">
                <p>Get ready to boost your happiness in just 45 daysHabits of a Happy Brain shows you how to retrain your brain to turn on the chemicals that make you happy. Each page offers simple activities that help you understand the roles of your "happy chemicals"--serotonin, dopamine, oxytocin, and endorphin. You'll also learn how to build new habits by rerouting the electricity in your brain to flow down a new pathway, making it even easier to trigger these happy chemicals and increase feelings of satisfaction when you need them most. Filled with dozens of exercises that will help your reprogram your brain, 
                Habits of a Happy Brain shows you how to live a happier, healthier life</p>
              </div>
              
              <div class="text3">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"> </th>
                        <th id="BookDetails" class=" px-5">Details </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Author</th>
                        <td>Loretta Graziano Breuning</td>
                      </tr>
                      <tr>
                        <th scope="row">Edition</th>
                        <td>Adams Media Corporation</td>
                      </tr>
                      <tr>
                        <th scope="row">Number of pages</th>
                        <td>300</td>
                      </tr>
                      <tr>
                        <th scope="row">Author</th>
                        <td>Loretta Graziano Breuning</td>
                      </tr>
                      <tr>
                        <th scope="row">Edition</th>
                        <td>Adams Media Corporation</td>
                      </tr>
                      <tr>
                        <th scope="row">Number of pages</th>
                        <td>300</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
    </main>
    @endsection