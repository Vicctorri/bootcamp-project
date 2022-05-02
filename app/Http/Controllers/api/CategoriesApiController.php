<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\CategoriesCollection;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class CategoriesApiController extends BaseController
{

    /**
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        return CategoriesCollection::collection(Category::all());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $category = new Category([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);
        $category->save();

        return $this->sendResponse(new CategoryCollection($category), 'Category successfully created.');
    }

    /**
     * @param $id
     * @return JsonResource
     */
    public function show($id): JsonResource
    {
        $category = Category::find($id);

        return new CategoryCollection($category);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();

        return $this->sendResponse($category, 'Category successfully updated.');
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        $category = Category::find($id);
        $category->delete();

        return $this->sendResponse(null, 'Category successfully deleted.');
    }
}
