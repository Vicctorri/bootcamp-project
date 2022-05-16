<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;

class oldHomeController extends Controller
{
    public function index(){

       /* Article::select([
            'id',
            'title',
            'published_at',
        ])
            ->where('published_at', '>=', Carbon::today()->startOfYear())
            ->where('published_at', '<=', Carbon::today()->endOfYear());

        Article::select([
            'id',
            'title',
            'published_at',
        ])->orderBy('published_at', 'DESC')->limit(5)->get();

        Article::select([
            'id',
            'title',
            'published_at',
        ])->where('category_id', '=', 5)->get();

        Article::select([
            'id',
            'title',
            'published_at',
        ])
            ->join('blog_categories', 'blog_categories.id', '=', 'articles.category_id')
            ->where('name', '=', 'Life and Style')->get();

        Article::select([
            'id',
            'title',
            'published_at',
            'category',
        ])
            ->where('published_at', '>=', Carbon::today()->startOfMonth())
            ->where('published_at', '<=', Carbon::today()->endOfMonth())
            ->get();;

        Article::select([
            'id',
            'title',
            'published_at',
            'category',
        ]) */

        return view('home.home');
    }
}
