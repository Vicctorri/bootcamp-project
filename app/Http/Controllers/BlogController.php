<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\BlogCategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
    public function index(){

        $request = request() ->all();
        $sort = $request['sort'] ?? 'ASC';

        $categories = BlogCategory::all();
        $category = $request['category'] ?? $categories->first()->id;

        $articles = Article::orderBy('created_at', $sort)->paginate(6);
        $articles ->  appends(['sort' => $sort]);


        return view('blog.blog', [
            'articles'=>$articles, 
            'categories' => $categories,
            'filter' => [
                'sort' => $sort,
                'category' => (int)$category
                ]
            ]);
    }
}
