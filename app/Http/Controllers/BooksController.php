<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Services\ModelLogger;
use Auth;
use Illuminate\Http\Request;


class BooksController extends Controller
{
//    /**
//     * @param $bookId
//     * @param Request $request
//     * @param ModelLogger $logger
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
    public function index ()
    {
        if(Auth::guest()){ // check if user is not logged
return redirect(route('login')); // redirect to login page
}
//        $book = Book::findOrFail($bookId);
        $search = request()->query('search');
        $books = Book::selectRaw("books.title as title, books.img as img, books.id as id,CONCAT(authors.name, ' ', authors.surname) as author")
            ->leftJoin('book_author', 'book_author.book_id', '=', 'books.id')
            ->leftJoin('authors', 'book_author.author_id', '=', 'authors.id')
            ->where('title', 'LIKE', "%{$search}%")
            ->paginate(9);

        $editions = Book::select('books.edition as edition')->distinct()->get();

        $categories = Category::select("category.name as name")->get();

        $authors = Author::selectRaw("CONCAT(authors.name,' ', authors.surname) as author")->get();

        $category = $request['category'] ?? $categories->first()->id;


//        $logger->logModel($request->user(),$book );
//        return view('home.books', ['book' => $book]);
        return view('home.books', [
            'books' => $books,
            'categories' => $categories,
            'authors' => $authors,
            'editions' => $editions,
            'filter' => [

                'category' => (int)$category
            ]
        ]);
    }

}
