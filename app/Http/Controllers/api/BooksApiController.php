<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\BookCollection;
use App\Http\Resources\BooksCollection;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class BooksApiController extends BaseController
{
    /**
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        return BooksCollection::collection(Book::all());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'integer',
            'title' => ['required', 'string'],
            'page_count' => 'integer',
            'edition' => 'string',
            'volume' => 'integer',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $book = new Book([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'page_count' => $request->get('page_count'),
            'edition' => $request->get('edition'),
            'volume' => $request->get('volume'),
            'description' => $request->get('description'),
        ]);
        $book->save();

        return $this->sendResponse(new BookCollection($book), 'Book successfully created.');
    }

    /**
     * @param $id
     * @return JsonResource
     */
    public function show($id): JsonResource
    {
        $book = Book::find($id);

        return new BookCollection($book);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'integer',
            'title' => ['required', 'string'],
            'page_count' => 'integer',
            'edition' => 'string',
            'volume' => 'integer',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $book = Book::find($id);
        $book->category_id = $request->get('category_id');
        $book->title = $request->get('title');
        $book->page_count = $request->get('page_count');
        $book->edition = $request->get('edition');
        $book->volume = $request->get('volume');
        $book->description = $request->get('description');
        $book->save();

        return $this->sendResponse($book, 'Book successfully updated.');
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        $book = Book::find($id);
        $book->delete();

        return $this->sendResponse(null, 'Book successfully deleted.');
    }
}
