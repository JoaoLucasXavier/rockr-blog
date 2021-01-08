<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

# Posts
Route::get('/post/index', [PostController::class, 'index'])->name('List all posts');
Route::get('/post/show/{id}', [PostController::class, 'show'])->name('List post by id');

# Contacts
Route::post('/contact/store', [ContactController::class, 'store'])->name('New contact');
