<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getall(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Post::all(), Response::HTTP_OK);
    }

    public function getById($id): \Illuminate\Http\JsonResponse
    {
        $post = DB::table('posts AS p')
            ->select(DB::raw('p.id, p.author, p.title, p.text, p.image, p.created_at '))
            ->where('p.id', $id)
            ->get();
        return response()->json($post, Response::HTTP_OK);
    }
}
