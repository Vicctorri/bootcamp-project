<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
    public function index(){

        $request=request()->all();

        $articles = Article::orderBy('created_at')->paginate(6);

        return view('blog.blog', ['articles'=>$articles]);
    }
}
