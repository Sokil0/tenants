<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


// Also, I would like to write unit test for setTenantIdSettings middleware and integration test for /user but i haven't time:(
Route::middleware(['auth:sanctum', 'setTenantIdSettings'])->get('/user', [UserController::class, 'getAll'])->name(
    'users.all'
);
