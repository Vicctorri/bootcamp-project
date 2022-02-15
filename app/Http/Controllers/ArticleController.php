<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\ModelLogger;
use Illuminate\Routing\ResponseFactory;

class ArticleController extends Controller
{
    private $responseFactory;

    public function show($articleId, Request $request, ModelLogger $logger){

        $article = Article::findOrFail($articleId);

        $logger->logModel($request->user(), $article);

        return view('article.article', ['article' => $article]);
    }


    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function update($articleId, ArticleRequest $request): JsonResponse
    {
        $article = Article::find($articleId);
        if($article){
            try {
                $article->title = $request->title;
                $article->save();
                return $this->responseFactory->json(['id' => $article->id], 200);
            } catch (\Throwable $e) {
                return $this->responseFactory->json(['error' => 'An error occurred when trying to update article!'], 200);
            }
        }
        return $this->responseFactory->json(null, 404);
    }
}
