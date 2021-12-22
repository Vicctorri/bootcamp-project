<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookPageController extends Controller
{
    public function index(){
        return view('blog.book_page');
    }
}
