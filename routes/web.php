<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookPageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsefulAdviceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LanguageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home.home');
});
Route::get('/lang', [LanguageController::class, 'langChange'])->name('langChange');

//Route::get('/books/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog/article/{id}', [ArticleController::class, 'show'])->name('blogArticle');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/books', [BooksController::class, 'index'])->name('books');
Route::get('/books/book_page/{id}', [BookPageController::class, 'index'])->name('book_page');
Route::get('/books/useful_advice', [UsefulAdviceController::class, 'index'])->name('useful_advice');
Route::get('/books/cart', [CartController::class, 'index'])->name('cart');
Route::get('/books/favorites', [FavoriteController::class, 'index'])->name('favorite');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send')
    ->middleware('log.activity:sendContact');


Route::get('/home', [App\Http\Controllers\oldHomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin'], function() {
    Route::get('{path}', function(){
        return view('dashboard');
    });
});


