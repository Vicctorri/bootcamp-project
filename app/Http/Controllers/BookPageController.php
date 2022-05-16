<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookPageController extends Controller
{
    public function index($id){
        return view('blog.book_page',['book' => Book::findOrFail($id)]);
    }

}
