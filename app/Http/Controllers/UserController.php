<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /*
        User::all i call here, for get in time, but in real project i think will be additional logic, so i would create
        repository for working with database and services class for writing additional logic (for example there we can
        make some manipulation with settings which we have)
     */

    /**
     * @return Factory|View|Application
     */
    public function showAll(): Factory|View|Application
    {
        return view('welcome')->with([
            'users' => UserResource::collection(User::all())
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        return response()->json(UserResource::collection(User::all()));
    }
}
