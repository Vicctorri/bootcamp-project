<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\ModelLogger;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * @param $bookId
     * @param Request $request
     * @param ModelLogger $logger
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index ($bookId, Request $request, ModelLogger $logger)
    {
        $book = Book::findOrFail($bookId);

        $logger->logModel($request->user(),$book );
        return view('home.books', ['book' => $book]);
    }

}
