<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UsersCollection;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class UsersApiController extends BaseController
{

    /**
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        return UsersCollection::collection(User::all());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => 2
        ]);
        $user->save();

        return $this->sendResponse(new UserCollection($user), 'User successfully created.');
    }

    /**
     * @param $id
     * @return JsonResource
     */
    public function show($id): JsonResource
    {
        $user = User::find($id);

        return new UserCollection($user);
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
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->role_id = 2;
        $user->save();

        return $this->sendResponse($user, 'User successfully updated.');
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        $user = User::find($id);
        $user->delete();

        return $this->sendResponse(null, 'User ' . $user->name . ' successfully deleted.');
    }
}
