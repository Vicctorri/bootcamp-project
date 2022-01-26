<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Psr\Log\LoggerInterface;

class ArticleController extends Controller
{
    public function show($articleId, Request $request, LoggerInterface $logger){

        $article = Article::findOrFail($articleId);

        $user = $request->user();
        $userRepresentation = $user ? "User with id {$user->id}" : "Unknown User";
        $logger->info(
            $userRepresentation . ' accessed ' . "article with id {$articleId}",
                ['id' => $articleId,
                'title' => $article->title,
                'author_id'=>$article->author_id,
                'seo_title'=>$article->seo_title,
                'published_at'=>$article->published_at,
                ]);

        return view('article.article', ['article' => $article]);
    }
}
