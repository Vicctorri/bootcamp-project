@extends('book-layout')
@section('content')
<div class="container-fluid gradient">
<div class="category">
      <div class="container  pt-5 mt-5">
        <div class="row">
          <div class="btn-group" role="group" aria-label="Basic outlined example">
              <a href="news.html" class="btn button-blog btn-outline-light fw-bold">News</a>
              <a href="{{route('blog')}}" class="btn button-blog btn-outline-light fw-bold ">Blog</a>
              <a href="{{route('useful_advice')}}" class="btn button-blog btn-outline-light fw-bold active">Useful Advice</a>
          </div>
         </div>
         <div class="col-md-12 shadow bg-light mt-5 mb-5">
            <p class="text-center pt-3 fw-bold">Rules For Borrowing Books</p>
            <p  class="px-5 pb-5" >In my opinion, borrowing and lending books is one of the greatest joys in life. 
                I adore handing my favorite books to friends and then getting the chance to talk about it. 
                Plus, of course, it's always a treat when a friend lends me a really good book. But lending a 
                book to a friend can be an incredible leap of faith. There's always that nagging question of if 
                they're going to treat it well, or even give it back at all. If you're borrowing a book, you want 
                to make sure you're being a good book citizen in every way possible.So, it's time to get everyone on the same page when it comes to book-borrowing. 
                Here are some ground rules that every reader should follow when borrowing books.
            </p>
        </div>
        <div class="col-md-12 shadow bg-light mt-5 mb-5">
            <p class="text-center pt-3 fw-bold">1. Give the book back in a timely manner. </p>
            <p  class="px-5 pb-5" >Seriously, the number one risk of lending out a book is not getting back. 
                Be aware of how much time you've held on to your friend's book, and make sure to give it back swiftly. 
                It might help to give yourself a deadline to read it by. 

            </p>
        </div>
        <div class="col-md-12 shadow bg-light mt-5 mb-5">
            <p class="text-center pt-3 fw-bold">2. Don't eat messy foods while reading it.</p>
            <p  class="px-5 pb-5" >In fact, it might be best to avoid eating food at all while reading a borrowed book. 
            </p>
        </div>
        <div class="col-md-12 shadow bg-light mt-5 mb-5">
            <p class="text-center pt-3 fw-bold">3. Don't write in, underline, or highlight ANYTHING. </p>
            <p  class="px-5 pb-5" >This should go without saying, but this book isn't yours so don't mark in it!
            </p>
        </div>
        <div class="col-md-12 shadow bg-light mt-5 mb-5">
            <p class="text-center pt-3 fw-bold">4. Don't take the book in the bath or to the pool.</p>
            <p  class="px-5 pb-5" >Taking a book so close to water is a risk you shouldn't be taking with someone else's copy. 
            </p>
        </div>
        <div class="col-md-12 shadow bg-light mt-5 mb-5">
            <p class="text-center pt-3 fw-bold">5. Wipe down all surfaces before setting the book down on them. </p>
            <p  class="px-5 pb-5" >Watch out for dirty kitchen tables! 
            </p>
        </div>
        <div class="col-md-12 shadow bg-light p-3">
            <p class="text-center pt-3 fw-bold">6. If something does happen to the book, offer to replace it. </p>
            <p  class="px-5 pb-5" >Accidents happen, but the right thing to do is take responsibility. 
            </p>
        </div>
        </div>
    </div>
</div>
 
    @endsection