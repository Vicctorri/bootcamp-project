<?php

use App\Http\Controllers\api\ArticleApiController;
use App\Http\Controllers\api\UsersApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/articles/most-popular',  [ArticleApiController::class, 'readMostPopularArticles']);
Route::get('/api/articles',  [ArticleApiController::class, 'readAllArticles']);
Route::get('/api/articles/{id}',  [ArticleApiController::class, 'readOneArticle']);
Route::delete('/api/articles/{id}',  [ArticleApiController::class, 'deleteArticle']);
Route::post('/api/articles/',  [ArticleApiController::class, 'createArticle']);

Route::post('', [ContactController::class, 'sendContact'])->name('sendContact');


//Route::middleware('auth:sanctum')->group( function () {
    Route::get('/users', [UsersApiController::class, 'index']);

    Route::group(['prefix' => 'user'], function (){
        Route::get('/{id}', [UsersApiController::class, 'show']);
        Route::delete('/{id}', [UsersApiController::class, 'delete']);
    });
//});
