<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($articleId){
        
        $article = Article::findOrFail($articleId);
        return view('blog.article', ['article' => $article]);
    }
}
