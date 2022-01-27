<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    public function index($bookId){

        $book = Book::findOrFail($bookId);

        return view('home.books', ['book' => $book]);

    }

}
