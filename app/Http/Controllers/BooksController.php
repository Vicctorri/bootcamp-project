<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Auth;

class BooksController extends Controller
{
    /**
     * @inheritDoc
     */
    public function index()
    {
        if (Auth::guest()) { // check if user is not logged
            return redirect(route('login')); // redirect to login page
        }
        $search = request()->query('search');
        $filterCategories = request()->query('category') ?: [];

        $books = Book::selectRaw("books.title as title, books.id as id, CONCAT(authors.name, ' ', authors.surname) as author, books.image as image")
            ->leftJoin('book_author', 'book_author.book_id', '=', 'books.id')
            ->leftJoin('authors', 'book_author.author_id', '=', 'authors.id')
            ->where('title', 'LIKE', "%{$search}%");

        if (!empty($filterCategories)) {
            $books->whereIn('books.category_id', $filterCategories);
        }

        $editions = Book::select('books.edition as edition')->distinct()->get();

        $categories = Category::select("category.name as name", 'category.id as id')->get();

        $authors = Author::selectRaw("CONCAT(authors.name,' ', authors.surname) as author")->get();


        return view('home.books', [
            'books' => $books->paginate(9),
            'categories' => $categories,
            'authors' => $authors,
            'editions' => $editions,
            'filter' => [
                'category' => $filterCategories,
            ]
        ]);
    }

}
